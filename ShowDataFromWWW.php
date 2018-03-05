<?php
class ShowDataFromWWW
{
    public function __construct()
    {
        $this->showResult = new ShowResult();
    }
    
    public function showCurrencyFromNBP()
    {
        $data = file_get_contents("http://www.nbp.pl/");

        preg_match('/<title>([^<]+)<\/title>/i', $data, $matches);
        $title = $matches[1];

        preg_match('/<h2>(Kursy średnie)<\/h2>/', $data, $matches);
        $info1 = $matches[1];

        preg_match('/<tbody>()<\/tbody>/', $data, $matches);
        $currency = $matches[1];

        preg_match('/<td>(1 EUR)<\/td>/', $data, $matches);
        $eur = $matches[1];
        preg_match('/<td>(1 USD)<\/td>/', $data, $matches);
        $usd = $matches[1];
        preg_match('/<td>(1 CHF)<\/td>/', $data, $matches);
        $chf = $matches[1];

        preg_match('/<td>(4,1986)<\/td>/', $data, $matches);
        $eurvalue = $matches[1];
        preg_match('/<td>(3,4200)<\/td>/', $data, $matches);
        $usdvalue = $matches[1];
        preg_match('/<td>(3,6470)<\/td>/', $data, $matches);
        $chfvalue = $matches[1];

        echo $title."<br />";
        echo $info1."<br />";
        echo $currency;
        echo $eur.' = '.$eurvalue."<br />";
        echo $usd.' = '.$usdvalue."<br />";
        echo $chf.' = '.$usdvalue."<br />";
    }
}
