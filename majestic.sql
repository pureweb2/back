-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2013 at 08:06 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `majestic`
--

-- --------------------------------------------------------

--
-- Table structure for table `getanchortext`
--

CREATE TABLE IF NOT EXISTS `getanchortext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `AnchorText` varchar(255) NOT NULL,
  `RefDomains` int(11) NOT NULL,
  `TotalLinks` int(11) NOT NULL,
  `DeletedLinks` int(11) NOT NULL,
  `NoFollowLinks` int(11) NOT NULL,
  `EstimatedLinkCitationFlow` int(11) NOT NULL,
  `EstimatedLinkTrustFlow` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

-- --------------------------------------------------------

--
-- Table structure for table `getbacklinkdata`
--

CREATE TABLE IF NOT EXISTS `getbacklinkdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SourceURL` text NOT NULL,
  `ACRank` int(11) NOT NULL,
  `AnchorText` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `FlagRedirect` int(11) NOT NULL,
  `FlagFrame` int(11) NOT NULL,
  `FlagNoFollow` int(11) NOT NULL,
  `FlagImages` int(11) NOT NULL,
  `FlagDeleted` int(11) NOT NULL,
  `FlagAltText` int(11) NOT NULL,
  `FlagMention` int(11) NOT NULL,
  `TargetURL` text NOT NULL,
  `DomainID` varchar(20) NOT NULL,
  `FirstIndexedDate` date NOT NULL,
  `LastSeenDate` date NOT NULL,
  `DateLost` int(11) NOT NULL,
  `ReasonLost` int(11) NOT NULL,
  `LinkType` varchar(50) NOT NULL,
  `LinkSubType` varchar(50) NOT NULL,
  `TargetCitationFlow` int(11) NOT NULL,
  `TargetTrustFlow` int(11) NOT NULL,
  `SourceCitationFlow` int(11) NOT NULL,
  `SourceTrustFlow` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Table structure for table `getkeywordinfo`
--

CREATE TABLE IF NOT EXISTS `getkeywordinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Item` int(11) NOT NULL,
  `Keyword` varchar(255) NOT NULL,
  `WordCount` int(11) NOT NULL,
  `TreatedAs` varchar(255) NOT NULL,
  `PhraseFoundFlag` int(11) NOT NULL,
  `PhraseSearchVolume` int(11) NOT NULL,
  `BroadFoundFlag` int(11) NOT NULL,
  `BroadSearchVolume` int(11) NOT NULL,
  `PhraseURLsInTitle` int(11) NOT NULL,
  `PhraseDomainsInTitle` int(11) NOT NULL,
  `PhraseURLsInURL` int(11) NOT NULL,
  `PhraseDomainsInURL` int(11) NOT NULL,
  `PhraseURLsInAnchor` int(11) NOT NULL,
  `PhraseDomainsInAnchor` int(11) NOT NULL,
  `PhraseURLsInAnchorAndInTitle` int(11) NOT NULL,
  `PhraseDomainsInAnchorAndInTitle` int(11) NOT NULL,
  `BroadURLsInTitle` int(11) NOT NULL,
  `BroadDomainsInTitle` int(11) NOT NULL,
  `BroadURLsInURL` int(11) NOT NULL,
  `BroadDomainsInURL` int(11) NOT NULL,
  `BroadURLsInAnchor` int(11) NOT NULL,
  `BroadDomainsInAnchor` int(11) NOT NULL,
  `BroadURLsInAnchorAndInTitle` int(11) NOT NULL,
  `BroadDomainsInAnchorAndInTitle` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
