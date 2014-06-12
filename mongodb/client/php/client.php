<?php
/**
 * @title mongo
 * @description
 * mongo client
 * @author zhangchunsheng
 * @email zhangchunsheng423@gmail.com
 * @version V3.0
 * @date 2014-06-09
 * @copyright  Copyright (c) 2010-2014 Luomor Inc. (http://www.luomor.com)
 */
// connect
$m = new MongoClient();

// select a database
$db = $m->comedy;

// select a collection (analogous to a relational database's table)
$collection = $db->cartoons;

// add a record
$document = array(
    "title" => "Calvin and Hobbes",
    "author" => "Bill Watterson"
);
$collection->insert($document);

// add another record, with a different "shape"
$document = array(
    "title" => "XKCD",
    "online" => true
);
$collection->insert($document);

// find everything in the collection
$cursor = $collection->find();

// iterate through the results
foreach($cursor as $document) {
    echo $document["title"] . "<br />";
}