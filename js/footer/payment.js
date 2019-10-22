
if(document.querySelector('#currency-select')) {
    document.querySelector('#currency-select').addEventListener('change', (event) => {
        let str;
        
        if(event.target.value === "CZK") {
            str = "Total value: 900CZK"
        } else if(event.target.value === "EUR") {
            str = "Total value: 35EUR"
        } else {
            str = "Please select your preffered currency"
        }
        document.querySelector('#amount-hook').textContent = str;
    });
}