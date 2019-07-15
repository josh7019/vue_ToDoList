待辦清單

嘗試使用laravel與jquery.ajax連接資料庫  
可新增刪除(透過get方法)
需使用php server
#尚未解決問題:可使用get但無法使用post判斷為csrf問題




資料庫指令:

CREATE DATABASE IF NOT EXISTS `todolist` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `todolist`;

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `todoDate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `todolist` (`id`, `title`, `content`, `todoDate`, `created_at`, `updated_at`) VALUES
(1, '星期一', '穿新衣', '2019-07-15', '2019-07-15 10:43:44', '2019-07-15 10:43:44'),
(4, '星期二', '肚子餓', '2019-07-15', '2019-07-15 03:32:35', '2019-07-15 03:32:35'),
(5, '星期三', '去爬山', '2019-07-15', '2019-07-15 03:34:24', '2019-07-15 03:34:24'),
(6, '星期四', '沒事', '2019-07-15', '2019-07-15 06:16:42', '2019-07-15 06:16:42');


ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;