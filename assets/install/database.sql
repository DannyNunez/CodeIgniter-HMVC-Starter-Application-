USE [Multisite_Micro_Dev]
CREATE TABLE dbo.search_results (
  ID int NOT NULL PRIMARY KEY IDENTITY,
  date_of_search DATE NOT NULL,
  keywordID int NOT NULL,
  link varchar(255) NOT NULL,
  displayLink varchar(255) NOT NULL,
  categoryID int NOT NULL,
  pageRank int NOT NULL
)
GO

USE [Multisite_Micro_Dev]
CREATE TABLE dbo.serr_categories (
categoryID int NOT NULL PRIMARY KEY IDENTITY,
category_name varchar(255) NOT NULL,
lead_value int NOT NULL
)
GO

USE [Multisite_Micro_Dev]
CREATE TABLE dbo.landing_pages (
pageID int NOT NULL PRIMARY KEY IDENTITY,
pageName text NOT NULL,
)
GO

Delete all records

USE [Multisite_Micro_Dev]
DELETE FROM [Multisite_Micro_Dev].[dbo].[search_results]
GO


DELETE ALL  TABLES
USE [Marketing_Dev]
EXEC sp_MSforeachtable @command1 = "DROP TABLE ?"

###################################################################
NOTES: 
Change all varchar to nvarchar(max)









#duranews CMS 

USERS TABLE 

USE [Marketing_Dev]
CREATE TABLE dbo.users (
  id int NOT NULL PRIMARY KEY IDENTITY,
  email varchar(100) NOT NULL,
  password varchar(128) NOT NULL,
  name varchar(128) NOT NULL,
)
GO

###################################################################
PAGES TABLE 

USE [Marketing_Dev]
CREATE TABLE dbo.pages (
  id int NOT NULL PRIMARY KEY IDENTITY,
  title varchar(255) NOT NULL,
  slug varchar(128) NOT NULL,
  body text,
  order varchar(128) NOT NULL,
)
GO

##################################################################
ARTICLE TABLE 

USE [Marketing_Dev]
CREATE TABLE dbo.articles (
  id int NOT NULL PRIMARY KEY IDENTITY,
  created date NOT NULL,
  updated date NOT NULL,
  created_by int NOT NULL,
  summary nvarchar(max) DEFAULT NULL,
  title nvarchar(max) DEFAULT NULL,
  subheading nvarchar(max) DEFAULT NULL,
  url varchar(255) NOT NULL,
  category_id int,
  body nvarchar(max) DEFAULT NULL,
  keywords nvarchar(max) DEFAULT NULL,
  author_id int NOT NULL,
  created_on int, 
  updated_on int,
  description nvarchar(max) DEFAULT NULL,
  status varchar(20) NOT NULL DEFAULT('DRAFT'),
  weight int,
  featured_image varchar(255) DEFAULT NULL
  featured_image_raw varchar(255) DEFAULT NULL

)
GO
###############################################################
categories TABLE 

USE [Marketing_Dev]
CREATE TABLE dbo.categories (
  id int NOT NULL PRIMARY KEY IDENTITY,
  name varchar(255) NOT NULL,
  url varchar(255) NOT NULL,
)
GO
##############################################################
Files TABLE 

USE [Marketing_Dev]
CREATE TABLE dbo.files (
  id int NOT NULL PRIMARY KEY IDENTITY,
  name varchar(255) NOT NULL,
  filename varchar(255) NOT NULL,
  full_path varchar(255) NOT NULL,
  url_path varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  extension varchar(255) NOT NULL,
  mimetype varchar(255) NOT NULL,
  width varchar(25) DEFAULT NULL,
  height varchar(25) DEFAULT NULL,
  filesize int NOT NULL,
  alt_attribute varchar(255) DEFAULT NULL,
  file_set varchar(255) DEFAULT NULL,
  author_id int NOT NULL,
  updated_on int NOT NULL,
  created_on  int NOT NULL,
  title  varchar(255) DEFAULT NULL,
  link  varchar(255) DEFAULT NULL,
 dir_id int NOT NULL
)
GO

##############################################################
UPLOAD DIRECTORY  TABLE 

USE [Marketing_Dev]
CREATE TABLE dbo.upload_directories (
  id int NOT NULL PRIMARY KEY IDENTITY,
  title varchar(255) NOT NULL,
  dir_name varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  server_path varchar(255) NOT NULL,
  url_path varchar(255) NOT NULL,
  parent_dir int DEFAULT NULL,
  author_id int NOT NULL,
)
GO


##############################################################
FILE SETS  TABLE 

USE [Marketing_Dev]
CREATE TABLE dbo.filesets (
  id int NOT NULL PRIMARY KEY IDENTITY,
  name varchar(255) NOT NULL,
)
GO

##############################################################
ADS  TABLE 

USE [Marketing_Dev]
CREATE TABLE dbo.ads (
  id int NOT NULL PRIMARY KEY IDENTITY,
  title varchar(255) NOT NULL,
  body nvarchar(max),
  category_id int DEFAULT NULL,
  author_id int NOT NULL,
  created int NOT NULL,
  updated int DEFAULT NULL,
  updated_by int DEFAULT NULL,
  status varchar(5) NOT NULL DEFAULT('DRAFT'),
featured_image varchar(255) DEFAULT NULL,
featured_image_raw varchar(255) DEFAULT NULL
)
GO

##############################################################
redirects  TABLE 

USE [Marketing_Dev]
CREATE TABLE dbo.redirects (
  id int NOT NULL PRIMARY KEY IDENTITY,
  articleID int NOT NULL,
  redirect nvarchar(max),
  foreign key ( articleID ) references articles (id)
)
GO

########VIEWS##############################################

Redirects  VIEW 
GO
CREATE VIEW redirects_view
AS 
SELECT 
articles.id as articleID,
redirects.id as redirectID,
articles.url, 
redirects.redirect, 
articles.title,
articles.created, 
articles.category_id, 
categories.name as 
category_name, 
users.first_name , 
users.last_name
FROM dbo.articles
JOIN dbo.categories ON articles.category_id = categories.id
JOIN dbo.users ON articles.author_id = users.id
JOIN dbo.redirects ON redirects.articleID = articles.id
GO

########VIEWS##############################################

ARTICLES LIST VIEW 
USE Marketing_Dev;
GO
CREATE VIEW articles_list
AS 
SELECT articles.id, articles.author_id , articles.created, articles.status ,
articles.title , articles.url , articles.updated , articles.created_on ,  articles.category_id, categories.name as category_name, 
users.first_name , users.last_name
FROM dbo.articles
JOIN dbo.categories ON articles.category_id = categories.id
JOIN dbo.users ON articles.author_id = users.id
GO

###########################################################

########VIEWS##############################################

ADS LIST VIEW 

USE Marketing_Dev;
GO
CREATE VIEW ads_list
AS 
SELECT 
ads.id, 
ads.author_id , 
users.first_name , 
users.last_name, 
ads.created , 
ads.updated ,
ads.title ,
ads.status ,
categories.name as category_name
FROM dbo.ads
JOIN dbo.categories ON ads.category_id = categories.id
JOIN dbo.users ON ads.author_id = users.id
GO

### Adjustments to the users table#########################
#
#The changes need to be merged into 
######################################################
USE Multisite_Micro_Dev;
GO
ALTER TABLE [Marketing_Dev].[dbo].[users]
ADD 
user_image nvarchar(max) DEFAULT NULL,
user_image_raw nvarchar(max)DEFAULT NULL,
google_plus nvarchar(max)DEFAULT NULL
GO





