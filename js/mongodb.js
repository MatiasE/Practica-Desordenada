db.createUser({
	user: 'Fazt',
	pwd: '123',
	roles: ['readWrite', 'dbAdmin']
});

db.clientes.insert([
	{
		firstName: 'Isaac',
		lastName: 'Asimov'
	}
	{
		firstName: 'Elena',
		lastName: 'Soraya'
	}
	{
		firstName: 'John',
		lastName: 'McMillan'
	}
]);

db.clientes.find(
{
	firstName: 'Isaac'
});

db.clientes.update(
	{lastName:'Soraya'},
	{firstName: 'Elena',
		lastName: 'Sorayya',
		gender: 'female'
	}
);

db.clientes.find(
	$or: [{firstName: 'Joe'}, {firstName: 'Isaac'}]
);

db.clientes.find(
	{gender: 'male'}
);

db.clientes.insert([
	{name: 'Alejandro', age:20},
	{name: 'Maria', age:30},
	{name: 'Jose', age: 18}
]);

db.clientes.insert({firstName:'Zack',address:{city:"Londres"}});
{
	firstName: 'Zack',
	address: {
		city: "Londres"
	}
}

db.clientes.find(
	{"address.city":"Londres"}
)

db.clientes.find({name: {$regex: "jandro"}});

db.clientes.find().sort({lastName: 1});

db.clientes.find().limit(3);

db.clientes.find().limit(3).sort({name:-1});

db.clientes.find().forEach(function(doc){print(doc.name)});

