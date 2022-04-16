<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Currency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('currencies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id();
            $table->string('currencyName');
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('currencies')->insert(
            array(
                ["currencyName" => "USD",],
                ["currencyName" => "GBP",],
                ["currencyName" => "EUR",],
                ["currencyName" => "AUD",],
                ["currencyName" => "JPY",],
                ["currencyName" => "SGD",],
                ["currencyName" => "CAD",],
                ["currencyName" => "SEK",],
                ["currencyName" => "HKD",],
                ["currencyName" => "NZD",],
                ["currencyName" => "CHF",],
                ["currencyName" => "BHD",],
                ["currencyName" => "KWD",],
                ["currencyName" => "OMR",],
                ["currencyName" => "QAR",],
                ["currencyName" => "SAR",],
                ["currencyName" => "AED",],
                ["currencyName" => "CNY",],
                ["currencyName" => "ATS",],
                ["currencyName" => "DEM",],
                ["currencyName" => "FRF",],
                ["currencyName" => "ITL",],
                ["currencyName" => "NLG",],
                ["currencyName" => "DKK",],
                ["currencyName" => "FIM",],
                ["currencyName" => "IRR",],
                ["currencyName" => "NOK",],
                ["currencyName" => "PKR",],
                ["currencyName" => "BDT",],
                ["currencyName" => "INR",],
                ["currencyName" => "MYR",],
                ["currencyName" => "BEF",],
                ["currencyName" => "THB",],
                ["currencyName" => "CYP",],
                ["currencyName" => "BND",],
                ["currencyName" => "JOD",],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
