INSERT INTO  `SmartForms` (
  `Name` ,
  `ReadOnlyFields` ,
  `WriteFields` ,
  `InsertedTime` ,
  `InsertedUser`
)
VALUES (
  'example',  
  'a,b',  
  'c,d', 
  NOW( ) ,  
  '1'
);
