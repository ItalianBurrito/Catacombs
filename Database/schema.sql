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
  CampaignName VARCHAR(255),
  GameMasterID INT,
  Characters TEXT(1023),

  PRIMARY KEY (CampaignID),
  FOREIGN KEY (GameMasterID) REFERENCES Users(UserID)
);

CREATE TABLE Items (
  ItemID INT NOT NULL AUTO_INCREMENT,
  CampaignID INT NOT NULL,
  ItemType VARCHAR(255) NOT NULL,
  ItemName VARCHAR(255) NOT NULL,
  ItemCost VARCHAR(255),
  ItemBonuses VARCHAR(255),
  ItemAttunment VARCHAR(63),
  ItemWieght SMALLINT,
  ItemHardness TINYINT,
  ItemHitpoints TINYINT,
  ItemFlavour VARCHAR(255),
  ItemDescription TEXT,

  PRIMARY KEY (ItemID)
);

CREATE TABLE Feats (
);

CREATE TABLE Skills (
);

CREATE TABLE Classes (
);

CREATE TABLE Characters (
);
