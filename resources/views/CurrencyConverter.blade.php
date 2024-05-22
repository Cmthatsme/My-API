<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Currency Converter</h1>
        <form id="currency-form">
            <label for="currency-from">From:</label>
            <select id="currency-from">
                <option value="AUD">Australian Dollar (AUD)</option>
                <option value="BRL">Brazilian Real (BRL)</option>
                <option value="CAD">Canadian Dollar (CAD)</option>
                <option value="CHF">Swiss Franc (CHF)</option>
                <option value="CNY">Chinese Yuan (CNY)</option>
                <option value="EUR">Euro (EUR)</option>
                <option value="GBP">British Pound (GBP)</option>
                <option value="HKD">Hong Kong Dollar (HKD)</option>
                <option value="INR">Indian Rupee (INR)</option>
                <option value="JPY">Japanese Yen (JPY)</option>
                <option value="KRW">South Korean Won (KRW)</option>
                <option value="NZD">New Zealand Dollar (NZD)</option>
                <option value="PHP">Philippine Peso (PHP)</option>
                <option value="RUB">Russian Ruble (RUB)</option>
                <option value="SEK">Swedish Krona (SEK)</option>
                <option value="SGD">Singapore Dollar (SGD)</option>
                <option value="THB">Thai Baht (THB)</option>
                <option value="TRY">Turkish Lira (TRY)</option>
                <option value="USD">US Dollar (USD)</option>
                <option value="ZAR">South African Rand (ZAR)</option>
            </select>
            <br><br>
            <label for="currency-to">To:</label>
            <select id="currency-to">
                <option value="AUD">Australian Dollar (AUD)</option>
                <option value="BRL">Brazilian Real (BRL)</option>
                <option value="CAD">Canadian Dollar (CAD)</option>
                <option value="CHF">Swiss Franc (CHF)</option>
                <option value="CNY">Chinese Yuan (CNY)</option>
                <option value="EUR">Euro (EUR)</option>
                <option value="GBP">British Pound (GBP)</option>
                <option value="HKD">Hong Kong Dollar (HKD)</option>
                <option value="INR">Indian Rupee (INR)</option>
                <option value="JPY">Japanese Yen (JPY)</option>
                <option value="KRW">South Korean Won (KRW)</option>
                <option value="NZD">New Zealand Dollar (NZD)</option>
                <option value="PHP">Philippine Peso (PHP)</option>
                <option value="RUB">Russian Ruble (RUB)</option>
                <option value="SEK">Swedish Krona (SEK)</option>
                <option value="SGD">Singapore Dollar (SGD)</option>
                <option value="THB">Thai Baht (THB)</option>
                <option value="TRY">Turkish Lira (TRY)</option>
                <option value="USD">US Dollar (USD)</option>
                <option value="ZAR">South African Rand (ZAR)</option>
            </select>
            <br><br>
            <label for="amount">Enter Amount:</label>
            <input type="number" id="amount">
            <br><br>
            <button type="button" id="swap-btn">Swap Currencies</button>
            <button type="button" id="convert-btn">Convert</button>
        </form>
        <div id="converted-amount"></div>
    </div>
</body>
<script src="js/script.js"></script>
</html>