# **DMS - Sri Amar Bikes**

[AMAR-DMS](http://amardms.tech "AMAR-DMS") is a Dealer Management Portal developed for [SRI AMAR BIKES](https://sriamarbikes.com "SRI AMAR BIKES") 
*It will be an step by step process where addition of features will come as developement goes on*

> **Credits**
- User [Sleek Dashboard](https://sleek.tafcoder.com/ "Sleek Dashboard") as Dashboard Template
- Uses Medoo (Sql plugin), Core PHP and jQuery

**Version 0.0.1**
1. Team Management with Authenticated Sign-in & Sign-out
2. Receipt Management
3. Inventory - Bikes Model and Bike color Management
4. User Profile Management
5. Company Information

[========]

**Version 0.0.2**
1. Excel/CSV  Uploading
2. Customer Follow up and Payment Collection via UPI

[========]

**Installation Guide**

1. Git clone `https://github.com/sudhakarbhra/amar-dms.git` or download it from [here][AMAR DMS]

2.  In `app/config.php` update  `DBNAME, DBSERVER, DBUSER, DBPASS`

3. Then update `URL, BASE_URL, BASE_URL_ADMIN, BASE_URL_API, FILE_UPLOAD, BASE_URL_UPLOAD` as per the website structure

4. Make sure `$live` is set to **true** in production enviromnent

5. In `app/` folder you'll find `database.sql` file upload them in to your database

[========]


[AMAR DMS]: https://github.com/sudhakarbhra/amar-dms "Amar DMS"