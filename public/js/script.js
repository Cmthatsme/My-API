async function convertAmount() {
    const currencyFrom = document.getElementById('currency-from').value;
    const currencyTo = document.getElementById('currency-to').value;
    const amount = parseFloat(document.getElementById('amount').value);

    
    if (isNaN(amount)) {
  
        const convertedAmountDiv = document.getElementById('converted-amount');
        convertedAmountDiv.innerHTML = `
            <p style="color: red;">Please enter a valid number.</p>
        `;
        return;
    }

    const url = `https://currency-conversion-and-exchange-rates.p.rapidapi.com/latest?from=${currencyFrom}&to=${currencyTo}`;
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'f26f357e2cmsh0134018598133bap15cd57jsn9470511c5bd1',
		    'X-RapidAPI-Host': 'currency-conversion-and-exchange-rates.p.rapidapi.com'
        }
    };

    try {
        const response = await fetch(url, options);
        const data = await response.json(); 

       
        const convertedAmount = amount * data.rates[currencyTo];

  
        const convertedAmountDiv = document.getElementById('converted-amount');
        convertedAmountDiv.innerHTML = `<h1> ${convertedAmount} ${currencyTo}</h1>`;
    } catch (error) {
        console.error(error);
    }
}


function swapCurrencies() {
    const currencyFrom = document.getElementById('currency-from').value;
    const currencyTo = document.getElementById('currency-to').value;

  
    document.getElementById('currency-from').value = currencyTo;
    document.getElementById('currency-to').value = currencyFrom;
}


document.getElementById('convert-btn').addEventListener('click', convertAmount);


document.getElementById('swap-btn').addEventListener('click', swapCurrencies);