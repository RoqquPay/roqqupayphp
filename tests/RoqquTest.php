<?php

namespace Roqqupay\Roqqupayphp\Tests;

use PHPUnit\Framework\TestCase;
use Roqqupay\Roqqupayphp\RoqqupayphpClass;

class RoqquTest extends TestCase
{
    /** @test */
    public function it_can_get_prices()
    {
        $roqquPayClass = new RoqqupayphpClass();
        $prices = $roqquPayClass->getallTokenPrices();
        $this->assertEquals("success", $prices['status']);
        $this->assertEquals("prices retrieved", $prices['message']);
    }

    /** @test */
    public function it_can_get_btc_price()
    {
        $roqquPayClass = new RoqqupayphpClass();
        $price = $roqquPayClass->getTokenPrice('btc');
        $this->assertEquals("success", $price['status']);
        $this->assertEquals("price retrieved", $price['message']);
    }

    /** @test */
    public function it_can_get_eth_price()
    {
        $roqquPayClass = new RoqqupayphpClass();
        $price = $roqquPayClass->getTokenPrice('eth');
        $this->assertEquals("success", $price['status']);
        $this->assertEquals("price retrieved", $price['message']);
    }

    /** @test */
    public function it_can_get_eth_price_history()
    {
        $roqquPayClass = new RoqqupayphpClass();
        $price = $roqquPayClass->getTokenPriceHistory('eth');
        $this->assertEquals("success", $price['status']);
        $this->assertEquals("price history retrieved successfully", $price['message']);
        $this->assertEquals("eth", $price['data'][0]['token']);
    }

    /** @test */
    public function it_can_get_btc_price_history()
    {
        $roqquPayClass = new RoqqupayphpClass();
        $price = $roqquPayClass->getTokenPriceHistory('btc');
        $this->assertEquals("success", $price['status']);
        $this->assertEquals("price history retrieved successfully", $price['message']);
        $this->assertEquals("btc", $price['data'][0]['token']);
    }

    /** @test */
//    public function it_can_verify_iuc()
//    {
//        $roqquPayClass = new RoqqupayphpClass();
//        $provider = 'dstv';
//        $iuc = 7029557786;
//        $verifyIuc = $roqquPayClass->verifyIucNumber($provider, $iuc);
//        $this->assertEquals("success", $verifyIuc['status']);
//
//    }

    /** @test */
    // public function it_can_get_address_data()
    // {
    //     $roqquPayClass = new RoqqupayphpClass();
    //     $addressData = $roqquPayClass->getAddressData("btc", "3EEhPSkNM86N755DgTdSgkJN4AFaZCC5jU");
    //     $this->assertEquals("success", $addressData['status']);
    //     $this->assertEquals("blockchain data retrieved successfully", $addressData['message']);
    //     $this->assertEquals("bitcoin", $addressData["data"]["network"]);
    // }

    /** @test */
    // public function it_can_generate_wallet_address()
    // {
    //     $roqquPayClass = new RoqqupayphpClass();
    //     $generateWallet = $roqquPayClass->generateWalletAddress("btc");
    //     $this->assertEquals("success", $generateWallet['status']);
    //     $this->assertEquals("wallet created successfully", $generateWallet['message']);
    //     $this->assertEquals("btc", $generateWallet['data']['type']);
    // }

    /** @test */
    // public function it_can_get_wallets()
    // {
    //     $roqquPayClass = new RoqqupayphpClass();
    //     $wallets = $roqquPayClass->getWallets('btc');
    //     $this->assertEquals("success", $wallets['status']);
    //     $this->assertEquals("wallets retrieved successfully", $wallets['message']);
    // }

    /** @test */
    // public function it_can_delete_wallet()
    // {
    //     $roqquPayClass = new RoqqupayphpClass();
    //     $deleteWallet = $roqquPayClass->deleteWallet('btc', '34MRPoy9A88mXzAhMMGQYCiADm2twJhArv');
    //     $this->assertEquals("success", $deleteWallet['status']);
    //     $this->assertEquals("wallet deleted successfully", $deleteWallet['message']);
    // }

    /** @test */
    public function it_can_get_banks()
    {
        $roqquPayClass = new RoqqupayphpClass();
        $getBanks = $roqquPayClass->getBanks();
        $this->assertEquals("success", $getBanks['status']);
        $this->assertEquals("all banks retrieved", $getBanks['message']);
    }

    /** @test */
    // public function it_can_resolve_bank_account()
    // {
    //     $roqquPayClass = new RoqqupayphpClass();
    //     $resolveAccount = $roqquPayClass->bankAccountResolve('3051559336', 'First Bank of Nigeria Limited');
    //     $this->assertEquals("success", $resolveAccount['status']);
    //     $this->assertEquals("account details retrieved successfully", $resolveAccount['message']);
    //     $this->assertEquals("ONOMOR ESEOGHENE BENJAMIN", $resolveAccount['data']);
    // }

    /** @test */
    public function it_can_get_data_bundles()
    {
        $roqquPayClass = new RoqqupayphpClass();
        $dataBundles = $roqquPayClass->getDataBundles('mtn');
        $this->assertEquals("success", $dataBundles['status']);
        $this->assertEquals("available subscriptions retrieved", $dataBundles['message']);
    }

    /** @test */
    public function it_can_get_cable_bundles()
    {
        $roqquPayClass = new RoqqupayphpClass();
        $cableBundles = $roqquPayClass->getCableBundles('dstv');
        $this->assertEquals("success", $cableBundles['status']);
        $this->assertEquals("available subscriptions retrieved", $cableBundles['message']);
    }

    /** @test */
    // public function it_can_verify_meter_number()
    // {
    //     $roqquPayClass = new RoqqupayphpClass();
    //     $verifyMeterNumber = $roqquPayClass->verifyMeterNumber('ikeja', 'prepaid', '45055844760');
    //     $this->assertEquals("success", $verifyMeterNumber['status']);
    //     $this->assertEquals("user info retrieved successfully", $verifyMeterNumber['message']);
    // }
}
