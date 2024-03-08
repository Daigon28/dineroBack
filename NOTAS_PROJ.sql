CREATE TABLE User(
    'id'        int()       NOT NULL AUTO_ INCREMENT PRIMARY KEY,
    'email'     varchar()   NOT NULL,
    'userName'  varchar()   NOT NULL,
    'password'  varchar()   NOT NULL,
    'roles'     array()     NOT NULL
)