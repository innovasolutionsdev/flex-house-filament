<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionResource\Pages;
use App\Filament\Resources\SubscriptionResource\RelationManagers;
use App\Models\MembershipPlan;
use App\Models\Subscription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;


class SubscriptionResource extends Resource
{
    protected static ?string $model = Subscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Membership Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('membership_plan_id')
                    ->label('Membership Plan')
                    ->options(MembershipPlan::all()->pluck('name', 'id'))
                    ->reactive()
                    ->required(),
                Forms\Components\DatePicker::make('start_date')
                    ->label('Start Date')
                    ->default(now()->format('Y-m-d'))
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $get, callable $set) {
                        $plan = MembershipPlan::find($get('membership_plan_id')); // Get the selected membership plan
                        if ($plan) {
                            $duration = $plan->duration; // Fetch the plan's duration
                            $endDate = Carbon::parse($state)->addDays($duration); // Calculate the end date
                            $set('end_date', $endDate->toDateString()); // Set the end date field
                        }
                    }),
                Forms\Components\DatePicker::make('end_date')
                    ->label('End Date')
                    ->disabled() // Make it visible but not editable
                    ->dehydrated()


            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('membershipPlan.name')->sortable(),
                Tables\Columns\TextColumn::make('start_date')->sortable(),
                Tables\Columns\TextColumn::make('end_date')->sortable(),
                Tables\Columns\BooleanColumn::make('active')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubscriptions::route('/'),
            'create' => Pages\CreateSubscription::route('/create'),
            'edit' => Pages\EditSubscription::route('/{record}/edit'),
        ];
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'membership_plan_id' => 'required|exists:membership_plans,id',
            'start_date' => 'required|date',
        ]);

        $plan = MembershipPlan::find($validatedData['membership_plan_id']);
        $endDate = Carbon::parse($validatedData['start_date'])->addDays($plan->duration);

        Subscription::create([
            'user_id' => auth()->id(),
            'membership_plan_id' => $validatedData['membership_plan_id'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $endDate,
        ]);
    }

}
