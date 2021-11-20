DROP TABLE IF EXISTS gallery;
CREATE TABLE gallery (
    `id` INT NOT NULL AUTO_INCREMENT,
    `url` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `size` VARCHAR(255) NOT NULL,
    `view_count` INT NOT NULL DEFAULT 0,

    PRIMARY KEY (id)
) CHARACTER SET utf8;

INSERT INTO gallery (`id`, `url`, `name`, `size`) VALUES 
    (1, 'public/img/', '1.jpg', '1920x1080'),
    (2, 'public/img/', '2.jpg', '1920x1080'),
    (3, 'public/img/', '3.jpg', '1920x1080');