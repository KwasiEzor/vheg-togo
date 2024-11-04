<?php

namespace App\Enums;

enum FundCurrenciesEnum: string
{
    case DOLLAR = 'USD';
    case EURO = 'EUR';

    /**
     * Get the symbol for default currencies.
     */
    public function symbol(): string
    {
        return match ($this) {
            self::DOLLAR => '$',
            self::EURO => '€',
        };
    }

    /**
     * Get the display name for default currencies.
     */
    public function displayName(): string
    {
        return match ($this) {
            self::DOLLAR => 'US Dollar',
            self::EURO => 'Euro',
        };
    }

    /**
     * Add a custom currency to the static storage array.
     *
     * @param string $code
     * @param string $symbol
     * @param string $displayName
     */
    public static function addCustomCurrency(string $code, string $symbol, string $displayName): void
    {
        $customCurrencies = &self::getCustomCurrencies();
        $customCurrencies[$code] = [
            'symbol' => $symbol,
            'display_name' => $displayName,
        ];
    }

    /**
     * Get the custom currencies array by reference.
     */
    private static function &getCustomCurrencies(): array
    {
        static $customCurrencies = [];
        return $customCurrencies;
    }

    /**
     * Get information for a specific custom currency, if it exists.
     */
    public static function getCustomCurrency(string $code): ?array
    {
        $customCurrencies = self::getCustomCurrencies();
        return $customCurrencies[$code] ?? null;
    }

    /**
     * Retrieve all currencies (default and custom).
     */
    public static function allCurrencies(): array
    {
        $defaultCurrencies = [
            self::DOLLAR->value => ['symbol' => self::DOLLAR->symbol(), 'display_name' => self::DOLLAR->displayName()],
            self::EURO->value => ['symbol' => self::EURO->symbol(), 'display_name' => self::EURO->displayName()],
        ];

        return array_merge($defaultCurrencies, self::getCustomCurrencies());
    }
}
