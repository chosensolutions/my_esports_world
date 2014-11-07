var express = require('express'),
    app = express();


app.use(express.static(__dirname, '/'));

app.get('/customers/:id', function(req, res) {
    var customerId = parseInt(req.params.id);
    var data = {};
    for (var i= 0,len=customers.length;i<len;i++) {
        if (customers[i].id === customerId) {
            data = customers[i];
            break;
        }
    }
    res.json(data);
});

app.get('/customers', function(req,res ) {
    res.json(customers);
});

app.get('/orders', function(req,res) {
   var orders = [];
    for (var i= 0,len=customers.length;i<len;i++) {
        if (customers[i].orders) {
            for (var j= 0,ordersLen=customers[i].orders.length;j<ordersLen;j++) {
                orders.push(customers[i].orders[j]);
            }
        }
    }
    res.json(orders);
});

app.delete('/customers/:id', function(req, res) {
    var customerId = parseInt(req.params.id);
    var data = { status: true };
    for (var i= 0,len=customers.length;i<len;i++) {
        if (customers[i].id === customerId) {
            customers.splice(i, 1);
            data = { status: true };
            break;
        }
    }
    res.json(data);
});

app.listen(8080);

console.log('Express listening on port 8080');

var customers = [
    {
        id: 1,
        joined:'2014-01-02',
        name:'John',
        city:'New York',
        orderTotal: 7.99,
        orders: [
            {
                id: 1,
                product: 'Baseball',
                total: 7.99
            }
        ]
    },
    {
        id: 2,
        joined:'2014-04-12',
        name:'Tom',
        city:'Austin',
        orderTotal: 19.99,
        orders: [
            {
                id: 2,
                product: 'Glove',
                total: 9.995
            },
            {
                id: 3,
                product: 'Bat',
                total: 9.995
            }
        ]
    },
    {
        id: 3,
        joined: '1999-06-15',
        name:'Jackie',
        city:'Los Angeles',
        orderTotal:44.50,
        orders: [
            {
                id: 4,
                product: 'Bag',
                total: 40.00
            },
            {
                id: 5,
                product: 'Hat',
                total: 4.5
            }
        ]
    }
];