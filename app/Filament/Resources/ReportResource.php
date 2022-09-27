<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportResource\Pages;
use App\Filament\Resources\ReportResource\RelationManagers;
use App\Models\Reports;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReportResource extends Resource
{
    protected static ?string $model = Reports::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Frontend Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('date')->required(),
                Forms\Components\TextInput::make('transaction')->required(),
                Forms\Components\TextInput::make('entry')
                ->reactive()
                ->afterStateUpdated(function(Closure $set, Closure $get,$state, ){
                     $set('saldo', $state - $get('out')) ;
                })
                ->required(),
                Forms\Components\TextInput::make('out')
                ->reactive()
                ->afterStateUpdated(function(Closure $set, Closure $get, $state){
                     $set('saldo', $get('entry') - $state) ;
                })
                ->required(),
                Forms\Components\TextInput::make('saldo')->disabled()->required(),
                Forms\Components\FileUpload::make('upload')
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')->wrap(),
                Tables\Columns\TextColumn::make('transaction')->wrap(),
                Tables\Columns\TextColumn::make('entry')->wrap(),
                Tables\Columns\TextColumn::make('out')->wrap(),
                Tables\Columns\TextColumn::make('saldo')->wrap(),
                Tables\Columns\ImageColumn::make('upload')
               
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }    
}

