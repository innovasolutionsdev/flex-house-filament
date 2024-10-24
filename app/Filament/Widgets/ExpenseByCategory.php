<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Carbon\Carbon;
use App\Models\Transaction;
use App\Models\RevenueCategory;

class ExpenseByCategory extends ChartWidget
{
    protected static ?string $heading = 'Expense By Category';

    protected function getData(): array
    {

        // Get the current month and year
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;


        // Fetch income transactions by category for the current month
        $expenseData = Transaction::selectRaw('transactions.category_id, SUM(transactions.amount) as total_expense')
        ->join(
            'revenue_categories',
            'transactions.category_id',
            '=',
            'revenue_categories.id'
        )
            ->where('transactions.type', 'expense') // Filter for expense transactions
            ->whereYear('transactions.created_at', $currentYear)
            ->whereMonth('transactions.created_at', $currentMonth)
            ->groupBy('transactions.category_id')
            ->get();

        // Prepare the labels and data for the pie chart
        $labels = [];
        $data = [];

        foreach ($expenseData as $expense) {
            // Fetch category name
            $category = RevenueCategory::find($expense->category_id);
            $labels[] = $category ? $category->name : 'Unknown Category';
            $data[] = $expense->total_expense;
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
