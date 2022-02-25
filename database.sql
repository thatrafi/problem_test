DROP TABLE IF EXISTS `Problem`;
DROP TABLE IF EXISTS `ProblemDomain`;
DROP TABLE IF EXISTS `ProblemDomainJoin`;

CREATE TABLE `Problem` (
    `pkProblemID` INT NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(80) NOT NULL,
    `Type` VARCHAR(20) NOT NULL,
    `Data` TEXT NOT NULL,
    PRIMARY KEY (`pkProblemID`)
);

CREATE TABLE `ProblemDomain` (
    `pkProblemDomainID` INT NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(80) NOT NULL,
    PRIMARY KEY (`pkProblemDomainID`)
);

CREATE TABLE `ProblemDomainJoin` (
    `pkProblemDomainJoinID` INT NOT NULL AUTO_INCREMENT,
    `fkProblemDomainID` INT NOT NULL,
    `fkProblemID` INT NOT NULL,
    PRIMARY KEY (`pkProblemDomainJoinID`)
);

INSERT INTO `Problem` VALUES
(1, '4 + 4 + 4 = . How much?', 'Blank', ''),
(2, '10 minus 5 is equal to:', 'Blank', ''),
(3, '3 times 2 is equal to:', 'Blank', "<script>alert('Problem Data')</script>"),
(4, '5 times 3 is equal to:', 'Blank', "<p>5 times 3 is equal to:</p>"),
(5, '6 times 3 is equal to:', 'Blank', "<p>6 times 3 is equal to:</p>");

INSERT INTO `ProblemDomain` VALUES
(1, 'Addition'),
(2, 'Substraction'),
(3, 'Multiplication');

INSERT INTO `ProblemDomainJoin` VALUES (1,1, 1), (2,2, 2), (3,3, 3), (4,3, 4), (5,3, 5);