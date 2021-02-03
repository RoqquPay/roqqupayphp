<?php

namespace Roqqupay\Roqqupayphp;

class RoqqupayphpClass
{
    private $secKey;
    private $base_url;

    public function __construct($secKey = '')
    {
        $this->secKey = $secKey;
        $this->base_url = 'https://api.roqqu.com/prod/v1';
    }

    /**
     * Function to get token prices
     * @return mixed|string
     */
    public function getallTokenPrices()
    {
        $endpoint = '/prices';
        $getPrices = $this->sendGetRequest($endpoint);

        return $getPrices;
    }

    /**
     * Function to get token price
     * @param string $token
     * @return mixed|string
     */
    public function getTokenPrice($token = 'btc')
    {
        $endpoint = '/price?symbol='.$token;
        $getPrice = $this->sendGetRequest($endpoint);

        return $getPrice;
    }

    /**
     * Function to get token price history
     * @param string $symbol
     * @return mixed|string
     */
    public function getTokenPriceHistory($symbol = 'btc')
    {
        $endpoint = '/history?symbol='.$symbol;
        $getPriceHistory = $this->sendGetRequest($endpoint);

        return $getPriceHistory;
    }

    /**
     * Function to get address data
     * @param $symbol
     * @param $address
     * @return mixed|string
     */
    public function getAddressData($symbol, $address)
    {
        $params = http_build_query(["symbol" => $symbol, "addr" => $address]);
        $endpoint = "/blockchain/address?".$params;
        $getAddressData = $this->sendGetRequest($endpoint);

        return $getAddressData;
    }

    /**
     * Function to generate wallet address
     * @param string $token
     * @return mixed|string
     */
    public function generateWalletAddress($token = 'btc')
    {
        $endpoint = "/user/generate-wallet";
        $params = 'token='.$token;
        $generateWallet = $this->sendPostRequest($endpoint, $params);

        return $generateWallet;
    }

    /**
     * Function to get wallets
     * @param string $token
     * @return mixed|string
     */
    public function getWallets($token = 'btc')
    {
        $endpoint = '/user/wallets';
        $params = 'token='.$token;
        $wallets = $this->sendPostRequest($endpoint, $params);

        return $wallets;
    }

    /**
     * Function to delete wallet address
     * @param $token
     * @param $wallet
     * @return mixed|string
     */
    public function deleteWallet($token, $wallet)
    {
        $endpoint = '/user/delete-wallet';
        $params = 'token='.$token.'&address='.$wallet;
        $deleteWallet = $this->sendPostRequest($endpoint, $params);

        return $deleteWallet;
    }

    /**
     * Function to send token to wallet address
     * @param $token
     * @param $amount
     * @param $wallet
     * @param string $memo
     * @param string $tag
     * @return mixed|string
     */
    public function sendToken($token, $amount, $wallet, $memo = '', $tag = '')
    {
        $endpoint = '/user/send-'.$token;
        $params = 'amount='.$amount.'&wallet='.$wallet;
        if ($memo != '') {
            $params.'&memo='.$memo;
        }
        if ($tag != "") {
            $params.'&tag='.$tag;
        }
        $sendToken = $this->sendPostRequest($endpoint, $params);

        return $sendToken;
    }

    /**
     * Function to verify bvn
     * @param $bvn
     * @return mixed|string
     */
    public function bvnVerify($bvn)
    {
        $endpoint = '/user/bvn-verify';
        $params = 'bvn='.$bvn;
        $verifyBvn = $this->sendPostRequest($endpoint, $params);

        return $verifyBvn;
    }

    /**
     * Function to get banks
     * @return mixed|string
     */
    public function getBanks()
    {
        $endpoint = '/banks';
        $getBanks = $this->sendGetRequest($endpoint);

        return $getBanks;
    }

    /**
     * Function to resolve bank account
     * @param $account_number
     * @param $bank
     * @return mixed|string
     */
    public function bankAccountResolve($account_number, $bank)
    {
        $endpoint = '/user/account-resolve';
        $params = 'account_number='.$account_number.'&bank='.$bank;
        $resolveBankAccount = $this->sendPostRequest($endpoint, $params);

        return $resolveBankAccount;
    }

    /**
     * Function to recharge airtime
     * @param $phone_number
     * @param $amount
     * @return mixed|string
     */
    public function rechargeAirtime($phone_number, $amount)
    {
        $endpoint = '/user/recharge-airtime';
        $params = 'phone_number='.$phone_number.'&amount='.$amount;
        $rechargeAirtime = $this->sendPostRequest($endpoint, $params);

        return $rechargeAirtime;
    }

    /**
     * Function to get data bundles
     * @param $provider
     * @return mixed|string
     */
    public function getDataBundles($provider)
    {
        $endpoint = '/data/subscriptions?provider='.$provider;
        $dataBundles = $this->sendGetRequest($endpoint);

        return $dataBundles;
    }

    /**
     * Function to subscribe data
     * @param $provider
     * @param $variation_code
     * @param $phone_number
     * @return mixed|string
     */
    public function dataSubscription($provider, $variation_code, $phone_number)
    {
        $endpoint = '/user/pay-data';
        $params = 'provider='.$provider.'&variation_code='.$variation_code.'&phone_number='.$phone_number;
        $subscribe = $this->sendPostRequest($endpoint, $params);

        return $subscribe;
    }

    /**
     * Function to get cable bundles
     * @param $provider
     * @return mixed|string
     */
    public function getCableBundles($provider)
    {
        $endpoint = '/cable/subscriptions?provider='.$provider;
        $getBundles = $this->sendGetRequest($endpoint);

        return $getBundles;
    }

    /**
     * Function to verify meter number
     * @param $provider
     * @param $meter_type
     * @param $meter_number
     * @return mixed|string
     */
    public function verifyMeterNumber($provider, $meter_type, $meter_number)
    {
        $endpoint = '/verify-meter?provider='.$provider.'&meter_type='.$meter_type.'&meter_number='.$meter_number;
        $verifyMeterNumber = $this->sendGetRequest($endpoint);

        return $verifyMeterNumber;
    }

    /**
     * Function for electric meter recharge
     * @param $provider
     * @param $meter_type
     * @param $meter_number
     * @param $amount
     * @param $phone_number
     * @return mixed|string
     */
    public function electricMeterRecharge($provider, $meter_type, $meter_number, $amount, $phone_number)
    {
        $endpoint = '/user/pay-electric';
        $params = 'provider='.$provider.'&meter_type='.$meter_type.'&meter_number='.$meter_number.'&amount='.$amount.'$phone_number='.$phone_number;
        $recharge = $this->sendPostRequest($endpoint, $params);

        return $recharge;
    }

    /**
     * Function to send get request
     * @param $endpoint
     * @return mixed|string
     */
    private function sendGetRequest($endpoint)
    {
        $url = $this->base_url.$endpoint;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //send request to server
        $request = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($request, true);

        if ($request) {
            return $result;
        } else {
            // var_dump($request);
            // die("Something went wrong while executing curl. Uncomment the var_dump line above this line to see what the issue is. Please check your CURL command to make sure everything is ok");

            return 'Network error occured';
        }
    }

    /**
     * Function to send post request
     * @param $endpoint
     * @param $params
     * @return mixed|string
     */
    private function sendPostRequest($endpoint, $params)
    {
        $url = $this->base_url.$endpoint;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            [
                'Authorization: Bearer '.$this->secKey,
            ]
        );
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $request = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($request, true);

        if ($request) {
            return $result;
        } else {
            // var_dump($request);
            // die("Something went wrong while executing curl. Uncomment the var_dump line above this line to see what the issue is. Please check your CURL command to make sure everything is ok");
            return 'Network error occured';
        }
    }
}
