// var apikey = 'a8K7QVFRuiizMSTJ0wtvRfXwbWR2_OBwqD9sTAWkdhc';

const url = "https://corona.lmao.ninja/v2/countries/chile";

fetch(url)
    .then(resp => {
        return resp.json();
    })
    .then(console.log);