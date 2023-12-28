<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)->columnSpanFull(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(60000)->columnSpanFull(),
                Select::make('main_tool')
                    ->relationship(name: 'tool', titleAttribute: 'name')->required(),
                Forms\Components\Datepicker::make('date')->required()->native(false)
                    ->displayFormat('F Y')
                ,
                Select::make('skills')
                    ->relationship(name: 'skills', titleAttribute: 'name')->multiple()->required()->columnSpanFull(),
                //links
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->url()
                    ->prefixIcon('heroicon-m-globe-alt'),
                Forms\Components\TextInput::make('github')
                    ->required()
                    ->url()
                    ->prefixIcon('heroicon-m-link'),
                Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                    ->multiple()
                    ->required()
                    ->collection('image')->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('image')
                    ->collection('image')->circular()->stacked(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('date')->date('F Y'),

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
            'index' => Pages\ListProjects::route('/'),
//            'create' => Pages\CreateProject::route('/create'),
//            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
