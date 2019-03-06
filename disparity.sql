CREATE TABLE usr (
    username VARCHAR(255) PRIMARY KEY NOT NULL,
    passUser VARCHAR(255) NOT NULL,
    tag INTEGER, 
    email VARCHAR(255) NOT NULL,
    profilPicture VARCHAR(2000)
) ENGINE=InnoDB;

CREATE TABLE content(
	contentId VARCHAR(255) PRIMARY KEY NOT NULL,
	captionContent VARCHAR(1000),
	picture VARCHAR(2000),
	upVote VARCHAR(255),
	downVote VARCHAR(255),
	commentId INTEGER,
	contentDate DATE,
	contentTime TIME,
    tag INTEGER,
    username VARCHAR(255) NOT NULL,
    FOREIGN KEY (username) REFERENCES usr(username)
) ENGINE=InnoDB;

CREATE TABLE comment (
	commentId VARCHAR(255) PRIMARY KEY NOT NULL,
	commentText VARCHAR(255),
	tag INTEGER,
	commentDate DATE,
	commentTime TIME,
	contentId VARCHAR(255),
    username VARCHAR(255),
	FOREIGN KEY (username) REFERENCES usr(username),
	FOREIGN KEY (contentId) REFERENCES content(contentId)
) ENGINE=InnoDB;