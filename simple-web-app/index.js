const express = require('express');
const app = express();

app.get('/', (req, res) => {
    res.send("<h1>Hi there! I am here again!!</h1>");
})

app.listen(8080, () => {
    console.log('listening on port 8080');
});