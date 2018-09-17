var express = require('express');


var app = express();

app.use(express.static(__dirname + '/public'));

app.listen(process.env.PORT || 5000);


app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname + '/public/index.html'));
});