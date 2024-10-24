<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Carbon\Carbon;
use App\Models\RevenueCategory;
use App\Models\Transaction;

class IncomeByCategory extends ChartWidget
{
    protected static ?string $heading = 'Monthly Income by Category';

    protected function getData(): array
    {

        // Get the current month and year
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        
        // Fetch income transactions by category for the current month
        $incomeData = Transaction::selectRaw('transactions.category_id, SUM(transactions.amount) as total_income')
        ->join('revenue_categories', 'transactions.category_id', '=',
            'revenue_categories.id'
        )
        ->where('transactions.type', 'income') // Filter for income transactions
        ->whereYear('transactions.created_at', $currentYear)
        ->whereMonth('transactions.created_at', $currentMonth)
        ->groupBy('transactions.category_id')
        ->get();

        // Prepare the labels and data for the pie chart
        $labels = [];
        $data = [];

        foreach ($incomeData as $income) {
            // Fetch category name
            $category = RevenueCategory::find($income->category_id);
            $labels[] = $category ? $category->name : 'Unknown Category';
            $data[] = $income->total_income;
        }

        return [
            'datasets' => [
                [
                    'data' => $data,
                    'backgroundColor' => ['#ff5733', '#33ff57', '#3357ff', '#f39c12', '#8e44ad'], // Customize colors
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
