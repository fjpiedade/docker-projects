const express = require('express');
const mysql = require('mysql2');

const app = express();

const connection = mysql.createConnection({
    //host: '172.17.0.2',//first approach
    host: 'mysql-docker-container', //approach to run with command --link
    user: 'root',
    password: 'password',
    database: 'dbdocker'

    // host: 'localhost', 
    // user: 'root',
    // password: 'adminH.2020',
    // database: 'projects'
});

connection.connect();

app.get('/', (req, res) => {
    res.json({message: "Hello Docker World!"});
});

app.get('/projects', function (req, res){
    connection.query('SELECT * FROM projects',
    function(error, results){
        if(error){
            throw error;
        }
        res.send(results.map(item => ({title: item.title, description: item.description, year: item.year})));
    });
});

// app.listen(9900,"0.0.0.0", function() {
//     console.log('Server is Running at Port 9900');
// });

app.listen(9988,"0.0.0.0", ()=>{
    console.log('Server is Running at Port 9988');
});