CREATE DATABASE cataDB;
USE cataDB;

CREATE TABLE Users (
  UserID INT NOT NULL AUTO_INCREMENT,
  UserName VARCHAR(255) NOT NULL,
  Email VARCHAR(255) NOT NULL,
  Password CHAR(60) NOT NULL,
  PRIMARY KEY (UserID)
);

CREATE TABLE Campaigns (
  CampaignID INT NOT NULL AUTO_INCREMENT,
  UserID INT,
  PRIMARY KEY (CampaignID)
  FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

CREATE TABLE MundaneItems (
  MundaneItemID INT NOT NULL AUTO_INCREMENT,
  ItemType VARCHAR(255) NOT NULL,
  ItemName VARCHAR(255) NOT NULL,
  ItemCost VARCHAR(255),
  ItemBonuses VARCHAR(255),
  ItemWieght SMALLINT,
  ItemHardness TINYINT,
  ItemHitpoints TINYINT,
  ItemFlavour VARCHAR(255),
  ItemDescription TEXT,

  PRIMARY KEY (MundaneItemID)
);
