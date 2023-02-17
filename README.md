
```php
<?php

define("DATA_FIREBIRD_CONFIG",[
        "hostname"=>"",
        "database"=>"",
        "username"=>"",
        "password"=>"",
        "port"=>"3050",
   ]);
	
use Cacio\ProdFirebird\ProdFirebird;


$db = new ProdFirebird();


### Metodo Basico

Veja abaixo os métodos básicos para chamar select, update, delete e query na classe.

#### Select
```php
$db_column = array(
	'column1',
	'column2'
);
			  
$db_where = array(
	'search_column_name' => 'search_value'
);
			  
$db_order = array(
	'column_name_to_order' => 'desc'
);
			  
$db->select('tablename', $db_column, $db_where, $db_order);

$db->execute();
```
#### Update
```php
$db_column = array(
	'column1' => 'column1_value',
	'column2' => 'column2_value'
);
			 
$db_where = array(
				'search_column_name' => 'search_value'
			)

$db->update('tablename', $db_column, $db_where);

$db->execute();
```
#### Delete
```php
$db_where = array(
	'search_column_name' => 'search_value'
)

$db->delete('tablename', $db_where);

$db->execute();
```

### Fetching Data

Veja abaixo os métodos para diferentes maneiras de buscar dados usando a classe de banco de dados php.

#### Fetch Row
```php
$db_column = array(
	'column1',
	'column2'
);
			  
$db->select('tablename', $db_column);

$db->execute();

foreach($db->fetch_row() as $value){
	echo $value[0];
	echo $value[1];
}
```
#### Fetch Associative
```php
$db_column = array(
	'column1',
	'column2'
);
			  
$db->select('tablename', $db_column);

$db->execute();

foreach($db->fetch_assoc() as $value){
	echo $value['column1'];
	echo $value['column2'];
}
```
#### Fetch Object
```php
$db_column = array(
	'column1',
	'column2'
);
			  
$db->select('tablename', $db_column);

$db->execute();

foreach($db->fetch_object() as $value){
	echo $value->column1;
	echo $value->column2;
}
```

### Outros métodos de classe de banco de dados

veja abaixo outros métodos úteis do PHP Database Class.

#### Closing connection
```php
$db->close();
```
#### Beginning transaction
```php
$db->begin_trans();

$db_where = array(
	'search_column_name' => 'search_value'
)

$db->delete('tablename', $db_where);

$db->execute();

$db->commit();
```
#### Rollback transaction
```php
$db->rollback();
```
#### Commiting transaction
```php
$db->commit();
```
