CREATE TABLE `development`.`eventlog` (
    `eventID` INT NOT NULL AUTO_INCREMENT,
    `eventTime` VARCHAR(512) NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `eventType` VARCHAR(256) NOT NULL,
    `eventInitiator` VARCHAR(512) NOT NULL,
    `eventDetails` VARCHAR(1024) NOT NULL,
    `eventLocation` VARCHAR(256) NOT NULL,
    PRIMARY KEY (`eventID`)
) ENGINE = InnoDB;