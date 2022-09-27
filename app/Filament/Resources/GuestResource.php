<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuestResource\Pages;
use App\Filament\Resources\GuestResource\RelationManagers;
use App\Models\Guests;
use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuestResource extends Resource
{
    protected static ?string $model = Guests::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Frontend Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                // Forms\Components\TextInput::make('group')->required(),
                // Select::make('group')
                //         ->options([
                //             'personal' => 'Personal',
                //             'company' => 'Company/ Institution',
                //         ]),
                Radio::make('group')->required()
                        ->options([
                            'personal' => 'Personal',
                            'company' => 'Company/ Institution',
                        ]),
                Forms\Components\TextInput::make('nik')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextArea::make('address')->required(),
                Forms\Components\TextInput::make('phone')->required(),
                Forms\Components\TextInput::make('meet')->required(),
                Forms\Components\TextInput::make('agenda')->required(),
                Forms\Components\TextInput::make('spt')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->wrap(),
                Tables\Columns\TextColumn::make('group')->wrap(),
                Tables\Columns\TextColumn::make('nik')->wrap(),
                Tables\Columns\TextColumn::make('email')->wrap(),
                Tables\Columns\TextColumn::make('address')->wrap(),
                Tables\Columns\TextColumn::make('phone')->wrap(),
                Tables\Columns\TextColumn::make('meet')->wrap(),
                Tables\Columns\TextColumn::make('agenda')->wrap(),
                Tables\Columns\TextColumn::make('spt')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListGuests::route('/'),
            'create' => Pages\CreateGuest::route('/create'),
            'edit' => Pages\EditGuest::route('/{record}/edit'),
        ];
    }    
}
