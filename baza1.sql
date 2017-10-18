-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Wrz 2017, 21:01
-- Wersja serwera: 10.1.25-MariaDB
-- Wersja PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasy`
--

CREATE TABLE `klasy` (
  `id_klasy` int(11) NOT NULL,
  `nazwa` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `klasy`
--

INSERT INTO `klasy` (`id_klasy`, `nazwa`) VALUES
(1, 'klasa IA'),
(2, 'klasa IB'),
(3, 'klasa IIB');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `id_pytania` int(11) NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `odpa` text COLLATE utf8_polish_ci NOT NULL,
  `odpb` text COLLATE utf8_polish_ci NOT NULL,
  `odpc` text COLLATE utf8_polish_ci NOT NULL,
  `odpd` text COLLATE utf8_polish_ci NOT NULL,
  `answer` text COLLATE utf8_polish_ci NOT NULL,
  `stopien` text COLLATE utf8_polish_ci NOT NULL,
  `czy_wielokrotne` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pytania`
--

INSERT INTO `pytania` (`id_pytania`, `tresc`, `odpa`, `odpb`, `odpc`, `odpd`, `answer`, `stopien`, `czy_wielokrotne`) VALUES
(1, 'Co przedastawia poniższy obrazek ?', 'płytę główną', 'kartę rozszerzeń', 'procesor', 'moduł pamięci', 'c', 'szkolny1', 0),
(2, 'Co znajduje się na poniższym zdjęciu?', 'pamięć flash', 'karta sieci bezprzewodowej USB', 'moduł pamięci RAM', 'procesor', 'b', 'szkolny1', 1),
(3, 'Dobierz nazwy portów lub interfejsów do pokazanych poniżej symboli:', 'USB, Bluetooth, mikrofon, sieć przewodowa Ethernet,</br> głośniki, sieć bezprzewodowa', 'USB, Bluetooth, sieć przewodowa Ethernet, </br>głośniki, sieć bezprzewodowa, mikrofon', 'Bluetooth, sieć przewodowa Ethernet, </br>głośniki, USB, mikrofon, sieć bezprzewodowa,', 'sieć przewodowa Ethernet, mikrofon, sieć bezprzewodowa,</br> USB, głośniki, Bluetooth', 'd', 'szkolny1', 0),
(4, 'Które z poniższych zdań definiuje pulpit:', 'Miejsce, gdzie można umieszczać wyłącznie ikony programów', 'Miejsce, gdzie nie można umieszczać ikon programów', 'Powierzchnia robocza na ekranie monitora niewidoczna po uruchomieniu komputera', 'Powierzchnia robocza na ekranie monitora widoczna po uruchomieniu komputera, gdzie można umieszczać ikony programów', 'd', 'szkolny1', 0),
(5, 'Co to jest urządzenie peryferyjne?', 'inna nazwa urządzenia wejściowego', 'inna nazwa urządzenia wyjściowego', 'urządzenie zewnętrzne połączone z komputerem', 'urządzenie wewnętrzne w komputerze', 'c', 'szkolny1', 0),
(6, 'Co to jest urządzenie wejściowe?', 'urządzenie do wprowadzania danych do komputera', 'urządzenie do wyprowadzania danych z komputera', 'urządzenie znajdujące się w pobliżu komputera', 'urządzenie znajdujące się daleko od komputera', 'a', 'szkolny1', 0),
(7, 'Które z poniższych jest urządzeniem wyjściowym:', 'klawiatura', 'mysz', 'trackball', 'ploter', 'd', 'szkolny1', 0),
(8, 'Które z poniższych jest urządzeniem wejściowym:', 'monitor', 'mikrofon', 'drukarka ', 'słuchawki', 'b', 'szkolny1', 0),
(9, 'System operacyjny to jest:', 'rodzaj ikony na ekranie komputera', 'urządzenie do przeprowadzania operacji', 'oprogramowanie zarządzające działaniem komputera', 'oprogramowanie do przygotowania prezentacji', 'c', 'szkolny1', 0),
(10, 'Które z poniższych, nie jest nazwą systemu operacyjnego?', 'MS Windows', 'MS-DES', 'Mac OS X', 'Linux', 'b', 'szkolny1', 0),
(11, 'Plik to jest:', 'ikona na pulpicie', 'zbiór danych, który ma nazwę i jest przechowywany na dysku', 'grupa folderów zebrana w jednym miejscu', 'efekt działania plotera', 'b', 'szkolny1', 0),
(12, 'Program komputerowy to jest:', 'ciąg poleceń zapisanych w zrozumiały dla komputera sposób w celu rozwiązania jakiegoś zadania', 'inne określenie pojęcia „hardware”', 'plik zawierający muzykę', 'rodzaj urządzenia podłączanego do wejścia USB ', 'a', 'szkolny1', 0),
(13, 'Które z poniższych zdań najlepiej opisuje folder?', 'Folder zawiera tylko podkatalogi, w których znajdują się pliki i kolejne podkatalogi.', 'Folder zawiera tylko pliki, w których znajdują się tylko kolejne pliki.', 'Folder zawiera zarówno pliki, jak i podkatalogi, w których znajdują pliki i kolejne podkatalogi', 'Folder zawiera tylko podkatalogi, w których znajdują się tylko kolejne podkatalogi.', 'c', 'szkolny1', 0),
(14, 'Do przeglądania dowolnej strony w Internecie nie jest konieczny:', 'komputer z dostępem do Internetu', 'przeglądarka internetowa', 'adres strony', 'program graficzny', 'd', 'szkolny1', 0),
(15, 'Który z poniższych programów nie jest przeglądarką internetową:', 'Chrome', 'Opera', 'Thunderbird', 'Firefox', 'c', 'szkolny1', 0),
(16, 'Adresy stron szkół i uczelni wyższych zazwyczaj zawierają domenę:', '.gov', '.com', '.edu', '.org', 'c', 'szkolny1', 0),
(17, 'W adresie e-mail nie może znajdować się:', 'kropka', 'cyfra', 'spacja', 'wielka litera', 'c', 'szkolny1', 0),
(18, 'Wysyłając e-mail musimy obowiązkowo podać:', 'imię i nazwisko odbiorcy', 'temat korespondencji', 'adres e-mail odbiorcy', 'ulicę, numer domu i numer mieszkania odbiorcy', 'c', 'szkolny1', 0),
(19, 'Netykieta oznacza zbiór zasad posługiwania się pocztą elektroniczną i korzystania z Internetu. Podczas korzystania z poczty elektronicznej, które z poniższych zasad należą do netykiety?', 'List powinien być w całości napisany wielkimi literami', 'List powinien zawierać zwroty grzecznościowe', 'Nie należy wpisywać tematu listu', 'Należy rozsyłać internetowe łańcuszki', 'b', 'szkolny1', 0),
(20, 'Który z poniższych programów nie jest komunikatorem internetowym?', 'Gadu-Gadu', 'Skype', 'Irfan', 'AOL Instant Messenger', 'c', 'szkolny1', 0),
(21, 'Które z poniższych narzędzi, nie jest narzędziem z edytora graficznego Paint?', 'Ścieżka', 'Zaznaczenie rozmyte', 'Zaznaczenie dowolnego kształtu', 'Zaznaczenie prostokątne', 'b', 'szkolny1', 0),
(22, 'Klawiatura nie zawiera:', 'klawiszy alfanumerycznych', 'klawiszy funkcyjnych', 'klawiszy strzałek', 'klawiszy formułowych', 'd', 'szkolny1', 0),
(23, 'Klawisz „Control” (Ctrl) służy do:', 'Wprowadzenia jednej z „polskich liter” (np. „ą” lub „ł”)', 'Wpisania małej litery', 'Wpisania wielkiej litery', 'Wywołania specjalnej funkcji', 'd', 'szkolny1', 0),
(24, 'Edytor graficzny to:', 'Użytkowy program komputerowy służący do tworzenia i modyfikacji plików graficznych', 'Ogólna nazwa programów komputerowych służących do tworzenia i edycji wykresów', 'Program, za pomocą którego można tylko przygotować prezentacje graficzne', 'Program, za pomocą którego można rysować i drukować wyłącznie wykresy', 'a', 'szkolny1', 0),
(25, 'Który z poniższych programów nie jest edytorem graficznym?', 'Paint', 'Photoshop', 'Photopa', 'Gimp', 'c', 'szkolny1', 0),
(26, 'Który z poniższych formatów, jest formatem graficznym?', 'BMP', 'DOC', 'XLS', 'PPT', 'a', 'szkolny1', 0),
(27, 'Które z poniższych zdań nie charakteryzuje Schowka?', 'Schowek to miejsce w pamięci operacyjnej komputera, gdzie dane są </br>przechowywane i mogą być odczytane przez dowolny program', 'Schowek to część pamięci komputera (specjalnie wydzielona), zarezerwowana									w systemach operacyjnych na zapisywanie \r\n\r\n</br>\r\nwskazanych przez użytkownika							danych, które mogą być odczytywane przez losowy program', 'Schowek umożliwia przenoszenie danych nie tylko w ramach jednego 							programu, ale między wszystkimi programami dostępnymi na komputerze', 'Schowek to miejsce w pamięci komputera gdzie można przechowywać tylko pliki graficzne', 'b', 'szkolny1', 0),
(28, 'Które z poniższych zdań dotyczy edytora tekstów?', 'Nie można poprawiać i zmieniać wyglądu tekstu przygotowanego raz					dokumentu w edytorze tekstu ', 'Edytor tekstu służy do tworzenia i redagowania dokumentów tekstowych za 					pomocą komputera', 'Utworzony z użyciem edytora tekstu dokument można przechowywać						wyłącznie w pamięci operacyjnej komputera', 'Utworzony z użyciem edytora tekstu dokument można wydrukować wyłącznie						po zapisaniu go na dysku twardym', 'b', 'szkolny1', 0),
(29, 'Który z poniższych programów nie jest edytorem tekstu?', 'Pages', 'Keynote', 'Writer', 'Word', 'b', 'szkolny1', 0),
(30, 'Która z poniższych zasad jest regułą poprawnego wprowadzania tekstu?', 'Klawisz Enter służy do kończenia wcięcia pierwszego wiersza w akapicie', 'Spacjami wstawiamy wcięcie pierwszego wiersza w akapicie', 'Klawiszem Tab wstawiamy wcięcie pierwszego wiersza w akapicie', 'Spacjami wyrównujemy tekst', 'c', 'szkolny1', 0),
(31, 'Które z poniższych zdań charakteryzuje „akapit”?', 'Początku akapitu nigdy nie wyróżniamy, robiąc wcięcie w pierwszym wierszu', 'Ostatni wiersz akapitu często wyróżniamy pogrubieniem', 'Akapit to fragment tekstu kończący się znakiem Enter', 'Akapit można wyrównać tylko do lewej lub do prawej krawędzi', 'c', 'szkolny1', 0),
(32, 'Wyrównanie tekstu akapitu zarówno lewej, jak i prawej krawędzi to:', 'edytowanie', 'justowanie', 'kopiowanie', 'kerning', 'b', 'szkolny1', 0),
(33, 'Czasem zdarza nam się podczas pisania na klawiaturze, gdy naciśniemy Y to na', 'Ctrl + Alt', 'Alt + Shift', 'Ctrl + Shift', 'Ctrl + Shift + Alt', 'c', 'szkolny1', 0),
(34, 'Aby nie pozostawiać jednoliterowych spójników na końcu wiersza, należy zamiast							zwykłej spacji, wstawić tzw. spację nierozdzielającą lub spację twardą. Jaki skrót klawiszowy wstawia taką spację?', 'Shift + spacja ', 'Shift + spacja', 'Ctrl + spacja', 'Ctrl + Alt + spacja', 'b', 'szkolny1', 0),
(35, 'Jak nazywa się umowa, która reguluje zasady użytkowania programu pobranego z Internetu?', 'umowa programowa', 'umowa internetowa', 'licencja', 'licencjat', 'c', 'szkolny1', 0),
(36, 'Czego NIE podłącza się do komputera poprzez gniazdo USB?(Pytanie wielokrotnego wyboru)', 'monitora', 'myszki', 'procesora', 'klawiatury', 'a,c', 'szkolny1', 1),
(37, 'Jak nazywają się założyciele Microsoftu(Pytanie wielokrotnego wyboru)', 'Bill Gates', 'Mark Allen', 'Paul Gate', 'Paull Allen', 'a,d', 'szkolny1', 1),
(38, 'Co wchodzi w skład jednostki centralnej?(Pytanie wielokrotnego wyboru)', 'procesor', 'pendrive', 'pamięć RAM', 'karta graficzna', 'a,d', 'szkolny1', 1),
(39, 'Edytory tekstu to?(Pytanie wielokrotnego wyboru)', 'MS Office', 'Paint', 'Wordpad', 'Notatnik', 'a,d', 'szkolny1', 1),
(40, 'Które urządzenia są urządzeniami wejściowymi?(Pytanie wielokrotnego wyboru)', 'drukarka', 'monitor', 'kierownica do gier', 'kamera', 'c,d', 'szkolny1', 1),
(41, 'Co przedastawia poniższy obrazek ?', 'Procesor', 'Pamięć operacyjna', 'Płyta główna', 'Dysk twardy', 'c', 'szkolny2', 0),
(42, 'Co przedstawia poniższy obrazek?', 'Procesor', 'Pamięć operacyjna ', 'Płyta główna', 'Dysk twardy', 'a', 'szkolny2', 0),
(43, 'Co przedstawia poniższy obrazek?', 'Procesor', 'Pamięć operacyjna', 'Płyta główna', 'Dysk twardy', 'b', 'szkolny2', 0),
(44, 'Co przedstawia poniższy obrazek?', 'Procesor', 'Pamięć operacyjna', 'Płyta główna', 'Dysk twardy', 'd', 'szkolny2', 0),
(45, 'Dobierz nazwy do odpowiadających im obrazków.', 'Mikrofon, Słuchawki, Aparat cyfrowy, Mysz, Skaner, Klawiatura,</br> Jednostka centralna, Pamięć flash, Monitor, Drukarka', 'Drukarka, Mikrofon, Słuchawki, Mysz, Skaner,</br> Klawiatura, Jednostka centralna, Pamięć flash, Monitor, Aparat cyfrowy', 'Drukarka, Jednostka centralna, Mikrofon, Mysz, Skaner,</br> Klawiatura, Słuchawki, Pamięć flash, Monitor, Aparat cyfrowy', 'Klawiatura, Drukarka, Mikrofon, Słuchawki,</br> Skaner, Jednostka centralna, Pamięć flash, Monitor, Aparat cyfrowy, Mysz,', 'a', 'szkolny2', 0),
(46, 'Które z poniższych zdań nie definiuje pulpitu?', 'Pulpit to powierzchnia robocza na ekranie monitora widoczna </br> po uruchomieniu komputera.', 'Pulpit to miejsce na ekranie komputera, gdzie umieszczone są ikony programów.', 'Pulpit to miejsce na ekranie komputera, gdzie zainstalowane są programy ', 'Pulpit to miejsce gdzie można umieszczać tylko foldery', 'c', 'szkolny2', 0),
(47, 'Co to jest Plik?', 'Zbiór danych, który ma nazwę i jest przechowywany na dysku.', 'Ikona na pulpicie', 'Zbiór obrazków zapisywany w folderze.', 'zbiór wiadomości z e - maila', 'a', 'szkolny2', 0),
(48, 'Dokończ prawidłowo zdanie. Folder … :', 'zawiera tylko podkatalogi, w których znajdują się pliki i kolejne podkatalogi.', 'zawiera pliki oraz podkatalogi, w których znajdują pliki i kolejne podkatalogi.', 'zawiera tylko podkatalogi, w których znajdują się tylko kolejne podkatalogi.', 'zawiera tylko grafikę', 'b', 'szkolny2', 0),
(49, 'Które z poniższych zdań nie charakteryzuje programu komputerowego?', 'Pojęcie „program komputerowy” jest często używane zamiennie</br> z określeniami „oprogramowanie” i „aplikacja”.', 'Program to ciąg poleceń zapisanych w zrozumiały dla komputera</br> sposób w celu wykonania jakiegoś zadania.', 'Pojęcie „program komputerowy” jest często używane zamiennie</br> z określeniem „hardware”.', 'program komputerowy to np. MS OFFICE', 'c', 'szkolny2', 0),
(50, 'Które z poniższych, nie jest nazwą systemu operacyjnego?', 'MS Windows', 'MS-DAS', 'Mac OS', 'Linux', 'b', 'szkolny2', 0),
(51, 'Aby przeglądać dowolną stronę w Internecie nie trzeba:', 'mieć zainstalowanego programu graficznego.', 'posiadać komputera z dostępem do Internetu.', 'mieć zainstalowanej przeglądarki internetowej.', 'posiadać programu Paint', 'a', 'szkolny2', 0),
(52, 'Który z poniższych programów nie jest przeglądarką internetową?', 'Opera', 'Ubuntu', 'Mozilla Firefox', 'Google Chrome', 'b', 'szkolny2', 0),
(53, 'Które z poniższych zdań nie charakteryzuje hiperłącza?', 'Hiperłącze to umieszczone w dokumencie odwołanie do innego dokumentu.', 'Uaktywnienie hiperłącza następuje po kliknięciu wyróżnionego obrazu</br> lub fragmentu tekstu.', 'Na jednej stronie może znajdować się maksymalnie pięć hiperłączy.', 'Na jednej stronie może znajdować się maksymalnie 10 hiperłączy.', 'c', 'szkolny2', 0),
(54, 'Adresy stron rządowych zazwyczaj zawierają domenę:', '.gov', '.edu', '.org', '.com', 'a', 'szkolny2', 0),
(55, 'Wysyłając e-mail musimy podać:', 'imię i nazwisko.', 'adres e-mail.', 'ulicę, numer domu', 'numer mieszkania', 'b', 'szkolny2', 0),
(56, 'Adres e-mail nie może zawierać:', 'Cyfr', 'Wielkich liter', 'Spacji', 'Backspace', 'b', 'szkolny2', 0),
(57, 'Które z poniższych zdań nie dotyczy Netykiety?', 'Nazwa Netykieta jest połączeniem angielskiego słowa net – sieć i polskiego etykieta.', 'Netykieta oznacza zbiór zasad posługiwania się pocztą elektroniczną </br>i korzystania z Internetu.', 'Netykieta oznacza zbiór instrukcji według, których należy instalować</br> przeglądarkę internetową.', 'Netykieta oznacza notatkę w notatniku', 'c', 'szkolny2', 0),
(58, 'Podczas korzystania z poczty elektronicznej, które z poniższych zasad nie należą do netykiety?', 'List nie powinien być w całości napisany wielkimi literami.', 'Nie należy wpisywać tematu listu', 'Nie należy rozsyłać internetowych łańcuszków.', 'Wiadomość powinna być napisana dużymi literami', 'b', 'szkolny2', 0),
(59, 'Który z poniższych programów nie jest komunikatorem internetowym?', 'Irfan', 'Skype', 'Gadu-Gadu', 'Google', 'a', 'szkolny2', 0),
(60, 'Klawiatura nie zawiera:', 'Klawiszy alfanumerycznych', 'Klawiszy sterowania kursorem', 'Klawiszy formułowych', 'Klawisza do uruchamiania jednostki centralnej', 'c', 'szkolny2', 0),
(61, 'Do czego służy klawisz „Control” (Ctrl)?', 'Wpisania wielkiej litery.', 'Wywołania specjalnej funkcji', 'Wprowadzenia jednej z „polskich liter” (np. „ą” lub „ł”).', 'służy do zapisywania plików', 'b', 'szkolny2', 0),
(62, 'Co to jest edytor graficzny?', 'Program, za pomocą którego można kreślić rysunki, zmieniać kształty obiektów,</br> przesuwać je, kopiować, kolorować, dodawać tekst i drukować.', 'Program, za pomocą którego można tylko dodawać tekst i drukować.', 'Program, za pomocą którego można rysować i drukować wykresy.', 'program za pomocą którego można pisać teksty dokumentów', 'a', 'szkolny2', 0),
(63, 'Który z poniższych programów nie jest edytorem graficznym?', 'Notepad', 'Paint', 'Gimp', 'Photoshop', 'a', 'szkolny2', 0),
(64, 'Który z poniższych formatów, jest formatem graficznym?', 'JPG', 'DOC', 'XLS', 'DOCX', 'a', 'szkolny2', 0),
(65, 'Które z poniższych narzędzi, nie jest narzędziem z edytora graficznego Paint?', 'Pędzel', 'Gumka', 'Ścieżka', 'justowanie', 'c', 'szkolny2', 0),
(66, 'Które z poniższych zdań nie charakteryzuje Schowka?', 'Schowek to miejsce w pamięci operacyjnej komputera, gdzie dane są przechowywane</br> i mogą być odczytane przez dowolny program.', 'Schowek umożliwia przenoszenie danych tylko w ramach jednego programu.', 'Schowek umożliwia przenoszenie danych nie tylko w ramach jednego programu,</br> ale między wszystkimi programami dostępnymi na komputerze.', 'schowek umożliwia zachowanie skopiowanych plików', 'b', 'szkolny2', 0),
(67, 'Które z poniższych zdań nie dotyczy edytora tekstów?', 'Edytor tekstu służy do tworzenia i redagowania dokumentów tekstowych</br> za pomocą komputera.', 'Nie można poprawiać i zmieniać wyglądu tekstu przygotowanego raz </br>dokumentu w edytorze tekstu.', 'Utworzony z użyciem edytora tekstu dokument można przechowywać w</br> pamięci komputera lub wydrukować. ', 'edytor tekstu umożliwia edycje grafiki(np. kontrast)', 'b', 'szkolny2', 0),
(68, 'Który z poniższych programów nie jest edytorem tekstu?', 'Paint', 'Writer', 'Word', 'Notatnik', 'a', 'szkolny2', 0),
(69, 'Która z poniższych zasad, nie jest regułą poprawnego wprowadzania tekstu?', 'Klawisz Enter służy do kończenia bieżącego akapitu i rozpoczynania nowego.', 'Klawiszem Tab wstawiamy wcięcie pierwszego wiersza w akapicie', 'Tekst wyrównujemy spacjami.', 'dzięki justowaniu tekst jest wyrównany do marginesów', 'c', 'szkolny2', 0),
(70, 'Które z poniższych zdań nie charakteryzuje Akapitu?', 'Akapit to fragment tekstu kończący się znakiem Enter', 'Ostatni wiersz akapitu często wyróżniamy pogrubieniem.', 'Początek akapitu często wyróżniamy, robiąc wcięcie w pierwszym wierszu. ', 'Akapit zaczyna się zawsze od nowej linijki', 'b', 'szkolny2', 0),
(71, 'Wprowadzenie listery „ź” jest możliwe po wciśnięciu kombinacji klawiszy:', 'Alt + z', 'Ctrl + Alt + z', 'Alt + x', 'Shift + z', 'c', 'szkolny2', 0),
(72, 'Aby nie pozostawiać jednoliterowych spójników na końcu wiersza, należy zamiast zwykłej spacji, wstawić tzw. spację nierozdzielającą lub spację twardą. Jaka kombinacja klawiszy wstawia taką spację?', 'Ctrl + Shift + spacja', 'Ctrl + spacja', 'Ctrl + Alt + spacja', 'Alt + Shift', 'a', 'szkolny2', 0),
(73, 'Adresy stron szkół i uczelni wyższych zazwyczaj zawierają domenę:', '.gov', '.com', '.edu', '.org', 'c', '', 0),
(74, 'Które z poniższych narzędzi, nie jest narzędziem z edytora graficznego Paint?', 'Ścieżka', 'Zaznaczenie rozmyte', 'Zaznaczenie dowolnego kształtu', 'Zaznaczenie prostokątne', 'a', 'szkolny2', 0),
(75, 'Które z poniższych narzędzi, nie jest narzędziem z edytora graficznego Paint? ', 'Ścieżka', 'Zaznaczenie rozmyte', 'Zaznaczenie dowolnego kształtu', 'Zaznaczenie prostokątne', 'a', 'szkolny2', 0),
(76, 'Jak nazywa się umowa, która reguluje zasady użytkowania programu pobranego z Internetu?', 'umowa programowa', 'umowa internetowa', 'licencja', 'licencjat', 'c', 'szkolny2', 0),
(77, 'Które urządzenia są urządzeniami wyjściowymi?<b>(Pytanie wielokrotnego wyboru)', 'myszka', 'głośniki', 'drukarka', 'ploter', 'b,c,d', 'szkolny2', 1),
(78, 'Plik jest zbiorem danych które mogą być zapisane na: <b>(Pytanie wielokrotnego wyboru)</b>', 'pendrive', 'dysku twardym', 'w pamięci ram', 'płycie DVD', 'a,b,d', 'szkolny2', 1),
(79, 'Jednymi z najważniejszych zasad netykiety, czyli zasad zachowania się w internecie są:<b>(Pytanie wielokrotnego wyboru)</b>', 'nie umieszczanie w internecie zdjęć innych osób bez ich zgody', 'nadużywanie emotikonów - ikon wyrażających emocje', 'spamowanie, czyli wysyłanie niechcianych e - maili', 'pisanie zgodnie z regułąmi ortograficznymi', 'a,d', 'szkolny2', 1),
(80, 'Używanie programu bez zgody jego autora jest: <b>(Pytanie wielokrotnego wyboru)', 'dozwolone przez prawo', 'piractwem komputerowym', 'ścigane przez prawo', 'procederem dozwolonym przez prawo i nie wynikają z tego żadne konsekwencje', 'b,c', 'szkolny2', 1),
(81, '<h3>Prentacja multimedialna może zawierać: <b>(Pytanie wielokrotnego wyboru)</b></h3>', 'dźwięk', 'tylko i wyłącznie pliki graficzne', 'pliki graficzne', 'animowane przejścia slajdów', 'a,c,d', 'szkolny2', 1),
(82, 'Domain Name System umożliwia:', 'tłumaczenie adresów internetowych na adresy zrozumiałe przez sieć komputerową', 'systemowe odtworzenie ustawień', 'domenowe nazewnictwo w systemie', 'połączenie z siecią', 'a', 'rejonowy1', 0),
(83, 'Technologia Bluetooth służy do:', 'przesyłania danych przewodowo na małe odległości', 'przesyłania danych bezprzewodowo na małe odległości', 'przesyłania danych przewodowo na duże odległości', 'przesyłania danych przewodowo do urządzeń bezprzewodowych', 'b', 'rejonowy1', 0),
(84, 'Czym jest scalanie komórek w MS Excel?', 'Łączeniem wielu komórek w jedną', 'Połączenie wielu zmian w jedną atomową operację ', 'Sumowaniem elementów', 'Wyliczaniem wartości z wielu komórek do jednej', 'a', 'rejonowy1', 0),
(85, 'Do odczytu i zapisu danych w napędach CD, DVD, Blue Ray wykorzystuje się:', 'Fale radiowe', 'Podczerwień', 'Głowicę magnetyczną', 'Laser', 'd', 'rejonowy1', 0),
(86, 'Bajt to:', 'Jednostka prędkości transmisji danych', 'Odpowiednik jednego znaku składający się z 8 bitów', 'Jednostka składająca się z 8 elementów ', 'Najmniejsza jednostka w komputerach (może przyjmować wartość 0 lub 1)', 'b', 'rejonowy1', 0),
(87, 'Jeśli zalogujesz się do skrzynki pocztowej z komputera w kawiarence internetowej:', 'niczym to nie grozi', 'wirusy na takim komputerze mogą przechwycić twoje hasło', 'email wysłany w tym miejscu nie dotrze do adresata', 'twoje konto pocztowe zostanie jutro zlikwidowane', 'b', 'rejonowy1', 0),
(88, 'Którego z poniżej wymienionych obszarów zagrożeń płynących z sieci Internet dotyczy pojęcie spyware:', 'oprogramowanie szpiegujące', 'wirusy', 'trojany', 'robaki internetowe', 'a', 'rejonowy1', 0),
(89, 'PNG, JPG, GIF - to popularne formaty:', 'dokumentów tekstowych', 'zdjęć', 'filmów ', 'muzyki', 'b', 'rejonowy1', 0),
(90, 'Jak tworzy się sztywną spację?', 'spacja', 'ALT + SHIFT + spacja', 'CTRL + SHIFT + spacja', 'ALT + CTRL + spacja', 'c', 'rejonowy1', 0),
(91, 'Korzystając z arkusza kalkulacyjnego można:', 'wpisać zadanie z matematyki - arkusz sam je rozwiąże', 'obejrzeć film na sieci', 'zapisywać i policzyć swoje wydatki w każdym miesiącu', 'skleić z kilku arkuszy pudełko na kredki', 'c', 'rejonowy1', 0),
(92, 'WiFi to:', 'oznaczenie sieci przewodowej', 'oznaczenie sieci bezprzewodowej', 'format zapisu filmów', 'system do odtwarzania dźwięku wysokiej jakości', 'b', 'rejonowy1', 0),
(93, 'Kodom binarnym przyporządkowano następujące litery: 00 - A, 01 - B, 10 - O, 11 - D. Który z poniższych kodów przedstawia słowo BAOBAB?  ', '000101001010', '001001001001', '010011010010', '010010010001', 'c', 'rejonowy1', 0),
(94, 'Co oznacza zapis =[wynagrodzenie]Arkusz1!$h$12', 'połączenie komórki z komórką H12 z arkusza Arkusz1,</br> który jest arkuszem skoroszytu wynagrodzenie ', 'połączenie komórki z komórką H12 z arkusza wynagrodzenie,</br> który jest arkuszem skoroszytu Arkusz1', 'połączenie komórki z komórką H12 z arkusza Arkusz1</br> i zapisanie wartości w arkuszu wynagrodzenie', 'połączenie arkusza Arkusz1 z arkuszem wynagrodzenie', 'a', 'rejonowy1', 0),
(95, 'Twórcą pierwszego komputera używającego kodu binarnego w 1938 roku był:', 'Konrad Zuse', 'Alan Turing', 'George Stibitz', 'John Atanasoff', 'a', 'rejonowy1', 0),
(96, 'Systemem operacyjnym nie jest:', 'Windows 7', 'Ubuntu', 'Open Office', 'IOS', 'c', 'rejonowy1', 0),
(97, 'A Urządzenie służące do zapisu i odczytu danych wykorzystujące nośnik magnetyczny to:', 'dysk twardy', 'DVD-ROM', 'CD-ROM', 'pamięć FLASH', 'a', 'rejonowy1', 0),
(98, 'Który z systemów liczbowych jest podstawą działania komputera?', 'dwójkowy', 'szesnastkowy', 'dziesiętny', 'jedynkowy', 'a', 'rejonowy1', 0),
(99, 'Interlinia w edytorze tekstu to:', 'odległość (odstęp) między dwiema literami tekstu', 'odległość (odstęp) między dwiema liniami tekstu', 'kreska na dole każdej strony', 'linia pionowa (z góry na dół)', 'a', 'rejonowy1', 0),
(100, 'Co nie jest serwisem społecznościowym?', 'instagram.com', 'ask.com', 'facebook.com', 'twitter.com', 'b', 'rejonowy1', 0),
(101, 'Wybierz zdanie prawdziwe dotyczące kompresji danych:', 'Kompresja wymaga klucza', 'Kompresja zwiększa rozmiar danych', 'Kompresja stratna nie powoduje utraty danych', 'Kompresja polega na usunięciu redundancji (nadmiarowości)', 'd', 'rejonowy1', 0),
(102, 'W programie MS Word numeracja stron w dokumencie realizowana jest najczęściej poprzez:', 'Wprowadzenie nagłówka i stopki', 'Wprowadzenie marginesów stron', 'Wprowadzenie tabeli', 'Zastosowanie stylowania', 'b', 'rejonowy1', 0),
(103, 'Kto jest uważany za ojca współczesnego komputera?', 'Bill Gates', 'Steve Jobs', 'John von Neumann', 'Mark Zuckerberg', 'c', 'rejonowy1', 0),
(104, 'Poprawny adres poczty elektronicznej to:', '@Janek ', 'janek34w@abc.pl', 'janek.34w@abc.', 'abc.pl@janek34w', 'b', 'rejonowy1', 0),
(105, 'Wskaż najbezpieczniejsze hasło do skrzynki pocztowej', '12345678', 'aFW53$#cA ', 'x3f ', 'kochammame', 'a', 'rejonowy1', 0),
(106, 'Który z poniższych formatów nie służy do kompresji plików?', 'EXE', '7z', 'CAB', 'RAR', 'd', 'rejonowy1', 0),
(107, 'Znaki interpunkcyjne (kropka, przecinek...) stawiamy:', 'nie ma to istotnego znaczenia', 'po postawieniu jednej spacji,', 'bezpośrednio przed następnym wyrazem,', 'zawsze bezpośrednio po wyrazie,', 'd', 'rejonowy1', 0),
(108, 'Sieć bezprzewodową potocznie nazywa się:', 'wifi', 'DVB', 'fifi', 'Wii', 'a', 'rejonowy1', 0),
(109, 'Komputer został zainfekowany wirusem. Jaki program pozwala na pozbycie się wirusa z komputera?', 'system operacyjny', 'program antywirusowy', 'arkusz kalkulacyjny', 'program wirusowy', 'b', 'rejonowy1', 0),
(110, 'Ile jest bitów w 18 bajtach:', '8', '144', '18', 'nie da się policzyć', 'b', 'rejonowy1', 0),
(111, 'W jaki sposób można uzyskać literę ź w MS WORD? ', 'Alt + z ', 'Alt + v', 'Ctrl + z', 'Alt + x', 'c', 'rejonowy1', 0),
(112, 'W arkuszu kalkulacyjnym kolumny oznacza się:', 'kolejnymi numerami: 1, 2, 3, 4, ...', 'literami alfabetu: A, B, C, ...', 'gwiazdkami', 'skrótami: K1, K2, K3, ...', 'b', 'rejonowy1', 0),
(113, 'Szyfr Cezara polega na podstawieniu pod daną literę alfabetu innej, odległej od niej o wartość klucza (k). Treść szyfrogramu brzmi: UYDWKXYCK, wartość klucza k=10. Jaki jest tekst oryginalny (zakładając, że użyto alfabetu łacińskiego, czyli bez polskich liter)?', 'ALAMAKOTA', 'KOTMANOSA', 'ALAMANOSA', 'KOTMAKOTA', 'b', 'rejonowy1', 0),
(114, 'W arkuszu kalkulacyjnym w komórce E1 wpisano formułę, jak na poniższym rysunku.</br>\r\n								Jaka będzie wartość komórki E2 po skopiowaniu do niej formuły z komórki E1?', '2', '1', '4', '0', 'a', 'rejonowy1', 0),
(115, 'Wirus komputerowy to:', 'brak poprawnej odpowiedzi', 'samoistne powielający się program komputerowy o szkodliwym działaniu', 'program potrafiący podszyć się pod inne aplikacje i wykonywać zdalnie różne,</br> zwykle niepożądane działania', 'złośliwe oprogramowanie rozprzestrzeniające się wyłącznie</br> za pośrednictwem sieci komputerowych ', 'd', 'rejonowy1', 0),
(116, 'Na dysku znajdują się dwa pliki graficzne zawierające ten sam obrazek: jeden zapisany w formacie GIF, a drugi w formacie JPEG. Który z tych plików będzie miał większy rozmiar?', 'GIF', 'będą miały dokładnie taki sam rozmiar', 'JPEG', 'nie można tego określić na podstawie danych zawartych w pytaniu', 'd', 'rejonowy1', 0),
(117, 'Co jest systemem operacyjnym?<b>(Pytanie wielokrotnego wyboru)', 'paint', 'Microsoft', 'MS Office', 'Linux', 'b,d', 'rejonowy1', 1),
(118, 'Zaznacz wersje Microsoft Windows<b>(Pytanie wielokrotnego wyboru)</b>', 'MS Windows 1.2 1984', 'MS Windows 95 1995', 'MS Windows Vista 2006', 'Windows 1.0 1985', 'b,c,d', 'rejonowy1', 1),
(119, 'Które z wymienionych to przeglądarki internetowe?<b>(Pytanie wielokrotnego wyboru)', 'Google Chrome', 'Firefox', 'Opera', 'Internet Explorer', 'a,b,c,d', 'rejonowy1', 1),
(120, 'Które programy to programy graficzne?<b>(Pytanie wielokrotnego wyboru)</b>', 'Paint', 'MS Excel', 'Gimp', 'Notepade++', 'a,c', 'rejonowy1', 1),
(121, 'Zaznacz roszerzenia plikow graficznych.<b>(Pytanie wielokrotnego wyboru)</b>', 'PNG', 'mp3', 'GIF', 'AVI', 'a,c', 'rejonowy1', 1),
(122, 'Pliki o rozszerzeniu MPG to pliki:', 'tekstowe', 'multimedialne', 'graficzne', 'wykonywalne', 'b', 'rejonowy2', 0),
(123, 'Konkurencyjny dla DVD format zapisu optycznego o nazwie Blu-ray pozwala na zapisanie na płycie jednowarstwowej:', '4,7 GB', '47 GB', '25 GB', '250 GB', 'c', 'rejonowy2', 0),
(124, 'Bit jest podstawową jednostką informacji, która jest zakodowana przez 0 lub 1. Dwóm bitom odpowiadają cztery możliwości: 00, 01, 10, 11. Ile możliwości odpowiada 1 bajtowi?', '8', '16', '32', '256', 'd', 'rejonowy2', 0),
(125, 'Do złącza, którego symbol przedstawiony jest obok można podłączyć:', 'monitor LCD z wejściem cyfrowym DVI', 'drukarkę wyposażoną tylko w złącze równoległe LPT', 'zewnętrzny dysk twardy', 'klawiaturę ze złączem PS/2 ', 'c', 'rejonowy2', 0),
(126, 'Jak nazywają się elementy z których zbudowany jest typowy adres poczty elektronicznej postaci konkurs@poczta.kuratorium.pl:', 'serwer@konto_użytkownika.domena', 'konto_użytkownika@serwer.domena', 'nr_komputera@domena.serwer', 'serwer@domena.konto_użytkownika', 'b', 'rejonowy2', 0),
(127, 'Intranet jest to:', 'system sprzedaży poprzez Internet', 'pierwotna nazwa sieci globalnej Internet', 'wewnętrzna sieć komputerowa', 'sieć internetowa działająca na obszarze Unii Europejskie', 'c', 'rejonowy2', 0),
(128, 'Operacja układająca pliki na dysku komputerowym tak, aby system miał do nich szybszy dostęp to:', 'kompresja dysku', 'konwersja dysku', 'defragmentacja dysku', 'skanowanie dysku', 'c', 'rejonowy2', 0),
(129, 'W trybie CMYK barwy powstają w wyniku zmieszania kolorów', 'czerwonego, zielonego, niebieskiego i czarnego', 'błękitnego, purpurowego, żółtego i czarnego.', 'czerwonego, purpurowego, żółtego i karmelowego', 'czerwonego, zielonego, żółtego i granatowego.', 'b', 'rejonowy2', 0),
(130, 'Oprogramowanie typu Adware to', 'oprogramowanie komercyjne sprzedawane wraz z nowym komputerem', 'darmowe oprogramowanie dające użytkownikowi możliwość testowania go przez zadany okres czasu', 'darmowe oprogramowanie zawierające kod źródłowy umożliwiające jego użytkowanie, udoskonalanie i dystrybucję. ', 'oprogramowanie, które po uruchomieniu automatycznie wyświetla materiały reklamowe, zazwyczaj bywa darmowe.', 'd', 'rejonowy2', 0),
(131, 'System OCR to', 'nazwa technologii wykorzystywanej do rozpoznawania tekstu.', 'technologia przeznaczona do skanowania schematów elektronicznych.', 'technologia zmiany bitmapy na obrazy wektorowe.', 'plik komputerowy wchodzący w skład systemu operacyjnego', 'a', 'rejonowy2', 0),
(132, 'POP3 oznacza', 'protokół niezbędny do wysyłania poczty elektronicznej.', 'protokół wykorzystywany do odbierania poczty elektronicznej', 'rodzaj reklamy (wyskakującego okienka) podczas przeglądania stron WWW', 'system automatycznego przydzielania adresów IP.', 'b', 'rejonowy2', 0),
(133, 'Sieć oznaczona skrótem MAN ', 'łączy komputery w obrębie jednego budynku', 'łączy komputery w obrębie jednej instytucji.', 'łączy komputery w obrębie aglomeracji miejskiej', 'łączy komputery w obrębie aglomeracji miejskiej', 'c', 'rejonowy2', 0),
(134, 'Model struktury sieci, w której ten sam komputer może równocześnie pełnić rolę serwera i klienta, czyli pobierać dane z innych komputerów i udostępniać swoje zasoby wszystkim pozostałym komputerom nosi nazwę:', 'Peer – to – peer ', 'Klient – serwer', 'FTP', 'Internet', 'a', 'rejonowy2', 0),
(135, 'Do komórki E5 wpisano formułę =$C$7+C9+$D3+B$4, a następnie skopiowano ja do komórki E6. Jaka postać będzie miała formuła w komórce E6?', '=D$8+D10+$D4+C$5', '=$C$8+D10+$D7+C6', '=$C$7+C10+$D4+B$4', '=C7+$C$9+D$3+$B4', 'c', 'rejonowy2', 0),
(136, 'Jaką figurę otrzymany na ekranie po wykonaniu polecenia w języku LOGO:  powtórz 20 [np 100 - 3 * npw lw 90]', ' ', ' ', ' ', ' ', 'a', 'rejonowy2', 0),
(137, 'Żółw wpadł w niedzielę rano do studni na głębokość 7m. W ciągu dnia żółw wspina się o 3m, zaś w nocy zmęczony zsuwa się o 1m. Żółw wyjdzie ze studni w:', 'poniedziałek', 'wtorek', 'środę', 'czwartek', 'b', 'rejonowy2', 0),
(138, 'Żółw Logo narysował figurę jak na rysunku poniżej. Podaj jej obwód. ', '72', '34', '23', 'nie da się policzyć, zbyt mało danych', 'b', 'rejonowy2', 0),
(139, 'Jaś napisał program komputerowy, który rysował 100 figur kolejno malując: kółko, trójkąt, kwadrat, kółko, trójkąt, kwadrat i tak dalej. Pięć ostatnich figur w ciągu utworzonym przez program Jasia to:', 'kółko, trójkąt, kwadrat, kółko, trójkąt ', 'trójkąt, kwadrat, kółko, trójkąt, kwadrat ', 'kwadrat, kółko, trójkąt, kwadrat, kółko', 'kółko, kwadrat, trójkąt, kółko, kwadrat ', 'c', 'rejonowy2', 0),
(140, 'Dana jest dodatnia liczba całkowita. W jednym kroku wykonujemy na niej następującą operację:</br>\r\n								Jeśli ta liczba jest nieparzysta, to pomnóż ją przez 3 i dodaj 1,  a jeśli ta liczba jest parzysta to podziel ją przez 2. </br>\r\n								Zaczynamy od liczby 52. Ile najmniej kroków należy wykonać, aby otrzymać liczbę 1?', '11', '12', '13', '14', 'a', 'rejonowy2', 0),
(141, 'Wirus spowodował zniszczenie systemu plików na dysku i komputer się nie uruchamia. Komputer jest nowy i objęty gwarancją. Kto powinien ponieść koszty naprawy komputera?', 'sprzedawca komputera', 'firma Microsoft', 'producent dysku twardego', 'użytkownik komputera', 'd', 'rejonowy2', 0),
(142, 'Która z poniższych liczb pojawi się w komórce C3, jeśli zostaną wykonane obliczenia zgodnie z podanymi niżej formułami:', '11', '7,5', '15', '22', 'd', 'rejonowy2', 0),
(143, 'Symbole w tabeli reprezentują liczby naturalne, natomiast dane liczbowe są sumami liczb z poszczególnych kolumn i wierszy. Jaką liczbę reprezentuje :) ?', '10', '9', '8', '3', 'a', 'rejonowy2', 0),
(144, 'Grubość serwetki po złożeniu na pół podwaja się. Jaka będzie grubość serwetki po 7 złożeniach, jeśli na początku serwetka ma grubość 0,4 mm?', '2,8 mm', '25,6 mm', '51,2 mm', '102,4 mm', 'c', 'rejonowy2', 0),
(145, 'Szyfranci do kodowania wyrazów stosują pewien klucz zapisany w tabeli KLUCZ. Słowo KONKURS zostało zakodowane w tabeli nr 1:    Szyfranci do kodowania wyrazów stosują pewien klucz zapisany w tabeli KLUCZ. Słowo KONKURS zostało zakodowane w tabeli nr 1:', 'INFORMATYK', 'INFORMATYKA', 'INFORMACJA', 'INFORMATYCZNY', 'c', 'rejonowy2', 0),
(146, 'Liczby 1, 2, 4, 7, 11, 16, ?, 29 wypisano według pewnej zasady. Liczba w miejsce znaku zapytania to:', '23', '22', '20', '18', 'b', 'rejonowy2', 0),
(147, 'Przechodząc przez kolejne pokoje labiryntu mnożymy napotkane tam liczby. Aby z zewnątrz dostać się do skarbu, należy udać się drogą, której łączna wartość wynosi 36. Na ile sposobów można dostać się do mety, wiedząc, że możesz wykorzystać tylko troje drzwi?', '4', '5', '6', 'więcej niż 6', 'a', 'rejonowy2', 0),
(148, 'W pewnej szkole począwszy od 2000 roku organizowane są: co trzy lata turniej grafiki komputerowej, co cztery lata turniej programowania, a co pięć lat olimpiadę informatyczną. Ile razy przez upływem 2050 roku odbędą się jednocześnie zawody grafiki komputerowej i programowania?', '4', '5', '10', '50', 'b', 'rejonowy2', 0),
(149, 'Jaka jest najmniejsza liczba porównań potrzebnych do znalezienia danej liczby w uporządkowanym  zbiorze złożonym z 250 liczb?', '8', '10', '25', '250', 'a', 'rejonowy2', 0),
(150, 'Jaka jest najmniejsza liczba porównań potrzebnych do znalezienia największej liczby w nieuporządkowanym  zbiorze złożonym z 10 liczb?', '10', '9', '5', '1', 'b', 'rejonowy2', 0),
(151, 'Który obszar danych w tabeli został wykorzystany do otrzymania poniższego wykresu funkcji?', 'A1:C3', 'A1:C2', 'A1:B3', 'A2:B3', 'b', 'rejonowy2', 0),
(152, 'Konto pocztowe:<b>(Pytanie wielokrotnego wyboru)</b>', 'to miejsce na twardym dysku serwera pocztowego przeznaczone na wiadomości e - mail', 'służy do spamowania', 'ma zawsze przypisany adres e - mail', 'konto pocztowe może założyć tylko osoba która ukończyłą 18 lat', 'a,c', 'rejonowy2', 1),
(153, 'Router może służyć jako: <b>(Pytanie wielokrotnego wyboru)</b>', 'sieć bezprzewodowa', 'sieć przewodowa', 'ozdoba na biurku', 'doprowadzenie sieci do kilku komputerów', 'a,b', 'rejonowy2', 1),
(154, 'Które z wymienionych adresów to adresy pocztowe: <b>(Pytanie wielokrotnego wyboru)</b>', 'onet.pl', 'gmail.com', 'o2.pl', 'google.pl', 'a,b,c', 'rejonowy2', 1),
(155, 'W jaki sposób w programie Ms Word zrobić duża literkę Ź<b>(Pytanie wielokrotnego wyboru)</b>', 'ctrl + ...', 'Shift + ...', 'prawy alt + x', 'lewy alt + z', 'b,c', 'rejonowy2', 1),
(156, 'Które z wymienionych to rozszerzenia video?<b>(Pytanie wielokrotnego wyboru)</b>', 'AVI', 'png', 'wifi', 'mp4', 'a,d', 'rejonowy2', 1),
(157, 'W jaki sposób można uzyskać literę ź w MS WORD?', 'Alt + z', 'Ctrl + z', 'Alt + x', 'Alt + v', 'b', 'wojewodzki1', 0),
(158, 'Który z poniższych interfejsów video nie jest interfejsem cyfrowym?', 'D-SUB (VGA)', 'DVI', 'Display Port', 'HDMI', 'a', 'wojewodzki1', 0),
(159, 'Rozwiń skrót WAN:', 'Web Area Network', 'World Area Network', 'Wave Area Networkv', 'Wide Area Network', 'd', 'wojewodzki1', 0),
(160, 'W systemie nazw domenowych DNS domena .tv jest związana z:', 'nadawcami telewizyjnymi i radiowymi', 'nadawcami telewizyjnymi', 'stronami do oglądania (ang. to view)', 'państwem Tuwalu ', 'd', 'wojewodzki1', 0),
(161, 'Który z zapisów to prawidłowe odwołanie do innego arkusza?', '=Arkusz3!A8', '=Arkusz3#A8', '=Arkusz3.A8', '=Arkusz3(A8)', 'a', 'wojewodzki1', 0),
(162, 'Szyfr płotkowy polega na zapisaniu słowa w postaci takiej jak na poniższym rysunku i odczytaniu go wierszami. Wysokość „płotka” jest kluczem szyfrującym.</br>\r\n								„AAALMKTAO”. Jaka będzie treść szyfrogramu, jeżeli tekst jawny to „PRESTIDIGITATOR” a klucz szyfrujący równy jest 5?', 'PGRIIEDTRSIAOTT', 'PRGEIOSIAOTOIRR', 'PGRIIDERTSIOATT', 'PGRIEDTSTOTIRTT', 'a', 'wojewodzki1', 0),
(163, 'Miara wydajności jednostki centralnej CPU komputera, która określa liczbę milionów operacji stałoprzecinkowych wykonywanych w ciągu sekundy to:', '1 bps', '1 FLOPS ', '1 GHz', '1 MIPS', 'd', 'wojewodzki1', 0),
(164, 'Co to jest CAPTCHA?', 'rodzaj robaka', 'edytor tekstu', 'rodzaj robota internetowego', 'technika sprawdzania, czy formularz wypełnia człowiek, czy robot', 'd', 'wojewodzki1', 0),
(165, 'Pamięć komputera składa się z 1024 komórek po 16 bitów każda. Jaka jest pojemność pamięci w bajtach:', '2048', '16', '1024', '16384', 'c', 'wojewodzki1', 0),
(166, 'ROM to:', 'pamięć stała', 'skrót od Random Operation Memory - pamięć wykorzystywana w generatorach liczb pseudolosowych', 'skrót od Reaction Of Memory - czas reakcji na pobudzenie pamięci impulsem elektrycznym', 'pamięć o dostępie swobodnym umożliwiająca zapis i odczyt', 'a', 'wojewodzki1', 0),
(167, 'Która z podanych formuł obliczania średniej bloku komórek od A1 do B10 jest poprawna?', '=ŚREDNIA(A1:B10)', '=ŚREDNIA(A1;...;B10)', '=ŚREDNIA(A1;B10)', '=ŚREDNIA(A1-B10)', 'a', 'wojewodzki1', 0),
(168, 'Dlaczego nie można siedzieć przy komputerze bez przerwy wiele godzin?', 'takie siedzenie męczy wzrok i kręgosłup i może im zaszkodzić jeśli trwa zbyt długo', 'a właśnie że można - niczym to nie grozi', 'długie siedzenie przed komputerem powoduje, że może on się popsuć', 'czym dłużej pracuje komputer tym bardziej się nagrzewa - może w końcu spowodować pożar', 'c', 'wojewodzki1', 0),
(169, 'Ile liczb czterocyfrowych można uzyskać używając wszystkich cyfr: 1, 2, 3, 4?', '24', '120', '20', '4', 'a', 'wojewodzki1', 0),
(170, 'Chcesz sporządzić wykres do zadania taki, jak na poniższym obrazku: </br>\r\n								 Aby sporządzić powyższy wykres należy wykonać następujące czynności. Zaznacz te, które są prawidłowe.', 'Zaznaczamy blok komórek z danymi, które chcemy zaprezentować na wykresie.</br>\r\n											W naszym zadaniu jest to blok komórek C3:C12.', 'Zaznaczamy blok komórek z danymi, które chcemy zaprezentować na wykresie.</br>\r\n											W naszym zadaniu jest to blok komórek B3:C12.', 'Dodajemy etykiety danych i określamy położenie legendy', 'Odnajdujemy w arkuszu kalkulacyjnym narzędzie odpowiedzialne za tworzenie arkuszy,</br>\r\n											wybieramy jego rodzaj i akceptujemy wstawienie.', 'd', 'wojewodzki1', 0),
(171, 'Maszyna licząca, służąca do przetwarzania wszelkich informacji, które da się zapisać w formie ciągu cyfr, albo sygnału ciągłego, to:', 'kalkulator', 'licznik cyfrowy', 'komputer', 'suwak logarytmiczny', 'c', 'wojewodzki1', 0),
(172, 'Jeśli opublikujesz zdjęcie na portalu społecznościowym (np. Facebook) i potem wykasujesz je, to:', 'na pewno nikt go więcej nie zobaczy', 'po 10 dniach zostanie ono automatycznie usunięte z Internetu', 'ktoś mógł je już zapisać na swoim komputerze - wtedy będzie on</br> mógł korzystać z niego dalej bez Twojej wiedzy', 'ktoś mógł je już zapisać na swoim komputerze - ale wtedy zostanie ona </br>automatycznie skasowane z jego komputera jeśli wykasujesz je z portalu ', 'c', 'wojewodzki1', 0),
(173, 'Formuła SUMA(A1:A5;C1:C5;E10):', 'oblicza sumę zawartości komórek z zakresu od A1 do A5, od C1 do C5 i komórki E10', 'oblicza sumę zawartości komórek od A1 do E10 bez komórek A5, C1, C5 ', 'oblicza sumę zawartości komórek z zakresu A1 do E10', 'oblicza sumę zawartości komórek A1, A5, C1, C5, E10', 'a', 'wojewodzki1', 0),
(174, 'W programie Microsoft Excel kombinacja klawiszy służąca do wprowadzenia kolejnego wiersza w tej samej komórce to:', 'Enter', 'Shift + Enter', 'Ctrl + Enter', 'Alt + Enter', 'd', 'wojewodzki1', 0),
(175, 'Do zapisu danych na płytach CD, DVD i BlueRay stosuje się', 'pole magnetyczne', 'pole elektryczne', 'promień świetlny', 'fale radiowe ', 'c', 'wojewodzki1', 0),
(176, 'W jaki sposób w arkuszu kalkulacyjnym można wymusić formatowanie komórki jako tekstowe?', 'znakiem \"@\"', 'znakiem \"#\"', 'znakiem \"$\"', 'znakiem  \' (apostrofa)', 'a', 'wojewodzki1', 0),
(177, 'W arkuszu kalkulacyjnym w polu E6 znajduje się formuła „=A1+$B$2*C$3-$D4”. Zawartość arkusza pokazano na poniższym rysunku</br>\r\n										Jaka będzie wartość komórki E7 po skopiowaniu do niej formuły z pola E6?', '13', '10', '11', '12', 'c', 'wojewodzki1', 0),
(178, 'W adresacji IPv4 adres składa się z:', '32 oktetów', '4 liczb szesnastkowych', '48 bitów', '32 bitów', 'd', 'wojewodzki1', 0),
(179, 'Funkcja JEŻELI(<warunek_logiczny>;<wartość_P>;<wartość_F>) zwraca jako swój wynik: wartość wpisaną jako <wartość_P> jeśli <warunek_logiczny> ma wartość PRAWDA lub wartość wpisaną jako <wartość_F> jeśli ten warunek ma wartość FAŁSZ. Załóżmy, że podatek dla zarobków do 10.000 zł to 20 % tych zarobków, a powyżej 10.000 zł - 30 %. Komórka A1 w arkuszu zawiera zarobek. Formuła która obliczy podatek od niego to:', '=JEŻELI(A1<10000;2000;3000)', '=JEŻELI(A1==10000;20*A1;30*A1)', '=JEŻELI(A1>10000;0,3*A1;0,2*A1)', '=JEŻELI(0,2*A1;<10000<;0,3*A1)', 'd', 'wojewodzki1', 0),
(180, 'Wybierasz się z grupą kolegów na wycieczkę do Krakowa. Poniżej masz zestawienie kosztów i liczbę uczestników.</br>\r\n								 Wykorzystując dostępny arkusz kalkulacyjny oblicz koszt przypadający na jednego uczestnika. Jaką formułę wpiszesz?', '=KOSZT(E8;E9)', '=SUMA(E3:E9)', '=E8*E9', '=E8/E9', 'd', 'wojewodzki1', 0),
(181, 'Nauczyciel wychowania fizycznego w Twojej szkole musi policzyć średni wynik Twojej klasy w skokach w dal wykorzystując dostępny arkusz kalkulacyjny (zobacz rysunek).</br>\r\n								Potrzebuje do tego jednej z poniższych formuł. Która z nich jest nieprawidłowa?', '=ŚREDNIA(SUMA(C3:C12)/10)', '=ŚREDNIA(SUMA(C3:C12)/ILE.WIERSZY(C3:C12))', '=ŚREDNIA(C3:C12)', '=ŚREDNIA(SUMA(C3:C12)/LICZBA.KOLUMN(C3:C12))', 'd', 'wojewodzki1', 0),
(182, 'Który z poniższych formatów nie służy do kompresji plików?', 'CAB', '7z', 'RAR', 'EXE', 'a', 'wojewodzki1', 0),
(183, 'Do budowania formuł w arkuszu kalkulacyjnym można wykorzystać dostępne funkcje. Są one podzielone na różne kategorie, np. matematyczne, statystyczne, logiczne, tekstowe. Która z poniższych nie należy do funkcji w arkuszu kalkulacyjnym?', 'SUMA', 'ILORAZ', 'ILOCZYN', 'ŚREDNIA', 'c', 'wojewodzki1', 0),
(184, 'Uszkodziła się klawiatura - nie działa klawisz \"Alt\". Jak można wprowadzić polską literę (np. \"ą\")?', 'z użyciem klawisza Control', 'nie da się już nic zrobić, trzeba pisać bez polskich liter', 'z użyciem klawisza Shift', 'z użyciem tyldy (tzw. \"falki\", czyli znaku \"~\")', 'd', 'wojewodzki1', 0),
(185, 'W programie MS Word numeracja stron w dokumencie realizowana jest najczęściej poprzez:', 'Zastosowanie stylowania', 'Wprowadzenie nagłówka i stopki', 'Wprowadzenie marginesów stron', 'Wprowadzenie tabeli', 'b', 'wojewodzki1', 0),
(186, 'Który z poniższych interfejsów jest najwolniejszy:', 'RS-232C', 'USB', 'SATA', 'Ethernet', 'a', 'wojewodzki1', 0),
(187, 'Jakie urządzenia posiadają w sobie komputer?<b>(Pytanie wielokrotnego wyboru)</b>', 'samochód', 'rower', 'pralka', 'bankomat', 'a,d', 'wojewodzki1', 1),
(188, 'O czym powinieneś pamiętać podczas korzystania z komputera?<b>(Pytanie wielokrotnego wyboru)</b>', 'o właściewej postawie', 'aby nie jeść przed komputerem', 'aby siedzieć blisko monitora', 'należy pamiętać aby nie dotykać tylniej części obudowy komputera i rzeczy z tym związanych', 'a,d', 'wojewodzki1', 1),
(189, 'Zaznacz narzędzia programu Paint<b>(Pytanie wielokrotnego wyboru)</b>', 'pędzel', 'justowanie', 'rysowanie figur, np. prostokąt', 'myszka', 'a,d', 'wojewodzki1', 1),
(190, 'Zaznacz programy antywirusowe<b>(Pytanie wielokrotnego wyboru)</b>', 'Avast', 'Kasperski', 'Ms Office', 'Paint', 'a,b', 'wojewodzki1', 1),
(191, 'Jakie funkcje ma Excel<b>(Pytanie wielokrotnego wyboru)</b>', 'SUMA', 'ŚREDNIA', 'MIN', 'RYSUJ.JEŻELI', 'a,b', 'wojewodzki1', 1),
(192, 'Poznałeś na czacie nowego kolegę. Chce Cię odwiedzić w domu i prosi o Twój\r\n											adres:', ' w żadnym wypadku nie wysyłasz mu go', 'wysyłasz mając nadzieję że pomoże Ci w matematyce ', 'wysyłasz mu go ale pod warunkiem że obieca, że nikomu innemu go nie\r\n												pokaże', 'wyślesz mu adres pod warunkiem że najpierw przyśle Ci swój', 'a', 'wojewodzki2', 0),
(193, 'Obraz z cyfrowego aparatu fotograficznego jest zapisywany w postaci:', 'zmian w strukturze fizycznej', 'grafiki wektorowej', 'grafiki bezpikselowej ', 'grafiki rastrowej', 'd', 'wojewodzki2', 0),
(194, 'ROM to:', 'pamięć operacyjna komputera - skrót od Random Only Memory', 'czas reakcji na żądanie odczytu z pamięci - skrót od Reaction Of Memory', 'ilość wolnego miejsca w pamięci - skrót od Room Of Memory', 'pamięć stała komputera - skrót od Read Only Memory', 'd', 'wojewodzki2', 0),
(195, 'Jeśli zalogujesz się do skrzynki pocztowej z komputera w kawiarence internetowej', 'wirusy na takim komputerze mogą przechwycić twoje hasło', 'twoje konto pocztowe zostanie jutro zlikwidowane', 'email wysłany w tym miejscu nie dotrze do adresata', 'niczym to nie grozi', 'a', 'wojewodzki2', 0),
(196, 'Co będzie wypisane w poniższym arkuszu w komórce B6 po skopiowaniu do niej\r\n							zawartości komórki B2, w której znajduje się następująca formuła:</br>\r\n							=JEŻELI(A2>A9;\"tak\";\"nie\")', '0', 'nie', 'tak', 'komórka pozostanie pusta', 'c', 'wojewodzki2', 0),
(197, 'Pamięć komputera składa się z 1024 komórek po 16 bitów każda. Jaka jest\r\n								pojemność pamięci w bajtach:', '16', '2048', '16384', '1024', 'b', 'wojewodzki2', 0),
(198, 'Który z poniższych jest adresem wersji 4 protokołu IP?', '8086:0212', '192.168.265.11', 'b8:27:eb:95:29:8f', '192.168.12.11', 'b', 'wojewodzki2', 0),
(199, 'Technologia Bluetooth służy do:', 'przesyłania danych bezprzewodowo na duże odległości', 'przesyłania danych przewodowo na bardzo małe odległości', 'przesyłania danych bezprzewodowo na małe odległości', 'przesyłania danych przewodowo na duże odległości', 'c', 'wojewodzki2', 0),
(200, 'W jaki sposób w arkuszu kalkulacyjnym można wymusić formatowanie komórki\r\n								jako tekstowe?', 'znakiem \"!\"', 'znakiem \"$\"', 'znakiem \"#\"', 'znakiem \' (apostrofa)', 'd', 'wojewodzki2', 0),
(201, 'PNG, JPG, GIF - to popularne formaty:', 'zdjęć', 'muzyki', 'filmów', 'dokumentów tekstowych', 'a', 'wojewodzki2', 0),
(202, 'Do odczytu i zapisu danych w napędach CD, DVD, Blue Ray wykorzystuje się:', 'Podczerwień', 'Głowicę magnetyczną', 'Fale radiowe', 'Laser', 'a', 'wojewodzki2', 0),
(203, 'W programie Microsoft Excel adresowanie bezwzględne powoduje:', 'Zmianę adresu w formule tylko o odpowiednią ilość wierszy w stosunku do\r\n										komórki,</br> z której nastąpiło przekopiowanie formuły', 'Zmianę adresu w formule o odpowiednią ilość wierszy oraz kolumn w\r\n										stosunku do komórki,</br> z której nastąpiło przekopiowanie formuły', 'Brak zmiany adresu w formule w stosunku do komórki,</br> z której nastąpiło przekopiowanie formuły', 'Zmianę adresu w formule tylko o odpowiednią ilość kolumn w stosunku do\r\n										komórki,</br> z której nastąpiło przekopiowanie formuły', 'c', 'wojewodzki2', 0),
(204, 'Wybierz urządzenie wejścia:', 'ploter', 'monitor', 'drukarka', 'myszka', 'd', 'wojewodzki2', 0),
(205, 'Co nie jest elementem wchodzącym w skład komputera PC?', 'wobulator', 'RAM', 'chipset', 'ploter', 'a', 'wojewodzki2', 0),
(206, 'Co wykorzystuje do swego działania monitor LCD?', 'komory z plazmą', 'ciekłe kryształy', 'lampę kineskopową', 'laser półprzewodnikowy', 'b', 'wojewodzki2', 0),
(207, 'Uszkodziła się klawiatura - nie działa klawisz \"Alt\". Jak można wprowadzić polską literę (np. \"ą\")?', 'nie da się już nic zrobić, trzeba pisać bez polskich liter', 'z użyciem klawisza Control', 'z użyciem tyldy (tzw. \"falki\", czyli znaku \"~\")', 'z użyciem klawisza Shift', 'c', 'wojewodzki2', 0),
(208, 'Interlinia w edytorze tekstu to:', 'linia pionowa (z góry na dół)', 'odległość (odstęp) między dwiema liniami tekstu', 'kreska na dole każdej strony', 'odległość (odstęp) między dwiema literami tekstu', 'b', 'wojewodzki2', 0),
(209, 'Komputer został zainfekowany wirusem. Jaki program pozwala na pozbycie się\r\n							wirusa z komputera?', 'program antywirusowy', 'system operacyjny', 'program wirusowy', 'arkusz kalkulacyjny', 'a', 'wojewodzki2', 0),
(210, 'Formuła SUMA(A1:A5;C1:C5;E10):', 'oblicza sumę zawartości komórek z zakresu A1 do E10', 'oblicza sumę zawartości komórek z zakresu od A1 do A5, od C1 do C5 i komórki E10', 'oblicza sumę zawartości komórek A1, A5, C1, C5, E10', 'oblicza sumę zawartości komórek od A1 do E10 bez komórek A5, C1, C5', 'b', 'wojewodzki2', 0),
(211, 'Dlaczego nie można siedzieć przy komputerze bez przerwy wiele godzin?', 'a właśnie że można - niczym to nie grozi', 'takie siedzenie męczy wzrok i kręgosłup i może im zaszkodzić jeśli trwa zbyt długo', 'czym dłużej pracuje komputer tym bardziej się nagrzewa - może w końcu spowodować pożar ', 'długie siedzenie przed komputerem powoduje, że może on się popsuć', 'b', 'wojewodzki2', 0),
(212, 'Interfejs to:', 'urządzenie komputerowe do badania zjawiska interferencji fal elektromagnetycznych', 'urządzenie pozwalające na połączenie ze sobą dwóch innych urządzeń,</br> które bez niego nie mogą ze sobą współpracować ', 'program służący do przechwytywania prywatnych wiadomości</br> użytkowników portalu Facebook ', 'proces kształtowania cyfrowego modelu twarzy za pomocą interpolacji', 'b', 'wojewodzki2', 0);
INSERT INTO `pytania` (`id_pytania`, `tresc`, `odpa`, `odpb`, `odpc`, `odpd`, `answer`, `stopien`, `czy_wielokrotne`) VALUES
(213, 'W internecie znalazłeś bardzo ładne zdjęcie. Chcesz go umieścić na swojej stronie/profilu z podpisem „Popatrzcie, jakie ładne zdjęcie zrobiłem”:', 'to dozwolone - sam je znalazłeś w sieci więc to tak jak byś je zrobił', 'nie można tak robić - to kłamstwo i złamanie prawa', 'jeśli przy zdjęciu nie ma informacji kto je zrobił, to znaczy że możesz tak\r\n										zrobić,</br> jeśli jest taka informacja, tylko wtedy nie możesz ', 'to niezbyt ładnie, ale wszyscy tak robią - nic się nie stanie', 'b', 'wojewodzki2', 0),
(214, 'Wskaż najbezpieczniejsze hasło do skrzynki pocztowej', 'aFW53$#cA ', 'x3f', '12345678', 'kochammame', 'a', 'wojewodzki2', 0),
(215, 'Superkomputer to:', 'Komputer o największych rozmiarach fizycznych', 'Komputer zbudowany z największej liczby tranzystorów', 'Komputer, który ma jedną z największych mocy obliczeniowych</br> na świecie w danym momencie ', 'Komputer o najbardziej wszechstronnym zastosowaniu', 'c', 'wojewodzki2', 0),
(216, 'W arkuszu kalkulacyjnym w polu E6 znajduje się formuła „=A1+$B$2*C$3-$D4”.\r\n										Zawartość arkusza pokazano na poniższym rysunku.', '12', '13', '11', '10', 'a', 'wojewodzki2', 0),
(217, 'Jedno słowo to 2 bajty. Ile słów mieści się w kilobajcie?', '1024', '500', '512', '1000', 'c', 'wojewodzki2', 0),
(218, 'Co nie jest urządzeniem wyjściowym komputera?', 'skaner', 'monitor LCD', 'drukarka', 'ploter', 'a', 'wojewodzki2', 0),
(219, 'Czym jest scalanie komórek w MS Excel?', 'Wyliczaniem wartości z wielu komórek do jednej', 'Sumowaniem elementów', 'Połączenie wielu zmian w jedną atomową operację', 'Łączeniem wielu komórek w jedną', 'd', 'wojewodzki2', 0),
(220, 'Która z podanych formuł obliczania średniej bloku komórek od A1 do B10 jest poprawna?', '=ŚREDNIA(A1:B10) ', '=ŚREDNIA(A1-B10)', '=ŚREDNIA(A1;B10)', '=ŚREDNIA(A1;...;B10)', 'a', 'wojewodzki2', 0),
(221, 'W arkuszu kalkulacyjnym następna kolumna po kolumnie Z ma symbol:', 'Z1', 'END', 'AA', 'A', 'c', 'wojewodzki2', 0),
(222, 'Główną rolą administratora sieci jest: <b>(Pytanie wielokrotnego wyboru)</b>', 'instalowanie oprogramowania na komputerze', 'zarządzanie siecią komputerów', 'obsługiwanie serwerowych systemów operacyjnych', 'usuwanie wirusów', 'b,c', 'wojewodzki2', 1),
(223, 'Zaznacz edytory video: <b>(Pytanie wielokrotnego wyboru)', 'Windows movie maker', 'YouTube Eitor', 'Gimp', 'Photoshop', 'a,b', 'wojewodzki2', 1),
(224, 'Zaznacz narzędzia sieciowe: <b>(Pytanie wielokrotnego wyboru)</b>', 'Router', 'Głośniki', 'Modem', 'Karta sieciowa', 'a,c', 'wojewodzki2', 1),
(225, 'Jakie zwierzęta są logiem systemu operacyjnego Linux i przeglądarki internetowej Firefox?: <b>(Pytanie wielokrotnego wyboru)</b>', 'Pingwin', 'Łoś', 'Hiena', 'Lis', 'a,d', 'wojewodzki2', 1),
(226, 'Jakim skrótem można zapisać plik w programie Ms WORD? <b>(Pytanie wielokrotnego wyboru)</b>', 'Ctrl +', 'z', 's', 'Shift', 'a,c', 'wojewodzki2', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(1) NOT NULL,
  `imie` varchar(10) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(15) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(60) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `rola` varchar(10) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `id_klasy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `imie`, `nazwisko`, `login`, `password`, `email`, `rola`, `id_klasy`) VALUES
(75, 'Jan', 'Kowalski', 'jan1', '$2y$10$AiYuyQxKmj50LPnmO3aIwukT8G1861hUdXso3wjv3lHnozOn3OGa2', 'jan1@op.pl', 'nauczyciel', 1),
(76, 'Krystyna', 'Nowak', 'krysia1', '$2y$10$zv/vPndZ.QaVMDE4kyDBqOdd0PFpARzNpkDohUhm2Xcbtc7OiYEuC', 'krysia1@op.pl', 'nauczyciel', 2),
(77, 'Zofia', 'Wisniewska', 'zosia1', '$2y$10$ga7PaBMkA0it.22yjEH9cekrqDKtUuE.KDQEPOI4cEzTUKCWwu8r.', 'zosia1@op.pl', 'uczen', 1),
(79, 'Marcin', 'Przecinek', 'marcin1', '$2y$10$RN/q.K/bMMyx915zN3KMBONNdqIaL6LP.z1tK/po18BKd16nQ8igu', 'marcin1@op.pl', 'uczen', 2),
(80, 'Maria', 'Marchewka', 'marysia1', '$2y$10$qQKPUdmUziLXWjZP0i3LSOuHlyyWfwXCM5Y6TejdafAxNAxHT0yle', 'marysia1@op.pl', 'uczen', 1),
(81, 'Katarzyna', 'Czosnek', 'kasia1', '$2y$10$K.yZRxpkZWE/TMpXMG0Due7fR7K6Ppw3G72V/r1CsCa.TM25.MGym', 'kasia1@op.pl', 'uczen', 1),
(82, 'Dawid', 'Cebula', 'dawid1', '$2y$10$rDFBSyNpw17jXmNpptpQBeGM0XPaWU48qJZRFfY6XBulJjPCuK/QS', 'dawid1@op.pl', 'uczen', 1),
(83, 'kamil', 'daniszewski', 'kamil1', '$2y$10$.L9TMKkwlxRvFG44carw9ubBc4YAftroxYcgq321.88gr8N5mmIK.', 'kamil1@op.pl', 'uczen', 2),
(84, 'Błażej', 'Kiepska', 'bla', '$2y$10$8ax75PjY4dVh56U8kOCmTuDumVrP/7cGJgSNQF4bOO/.p0idaHmYa', 'blazej1@op.pl', 'uczen', 2),
(85, 'kamil', 'kamil', 'kam1', '$2y$10$hWqkHZzPrNl9rFdm2NyXweAEx1LTF1gsIrzHv0pNJL/mMQhql/9.u', 'kam@op.pl', 'nauczyciel', 1),
(86, 'Błażej', 'kaka', 'kamm1', '$2y$10$Mrhq5t2b3bVsbEPFokXOYeICKlqctFc9M88i.axnhjp7eqezcvNBq', 'kamm@op.pl', 'nauczyciel', 2),
(87, 'Adrian', 'aaa', 'aaa1', '$2y$10$TKOSQruwTIR2NO92m4qJSOV/G2MPAl/IfPMVaO0jxfM702MevuWr.', 'aaa@op.pl', 'uczen', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

CREATE TABLE `wyniki` (
  `id` int(1) NOT NULL,
  `stopien_szkolny1` varchar(30) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `stopien_szkolny2` int(10) DEFAULT NULL,
  `stopien_rejonowy1` int(10) DEFAULT NULL,
  `stopien_rejonowy2` int(10) DEFAULT NULL,
  `stopien_wojewodzki1` int(10) DEFAULT NULL,
  `stopien_wojewodzki2` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `wyniki`
--

INSERT INTO `wyniki` (`id`, `stopien_szkolny1`, `stopien_szkolny2`, `stopien_rejonowy1`, `stopien_rejonowy2`, `stopien_wojewodzki1`, `stopien_wojewodzki2`) VALUES
(77, '4', NULL, 5, NULL, 5, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klasy`
--
ALTER TABLE `klasy`
  ADD PRIMARY KEY (`id_klasy`);

--
-- Indexes for table `pytania`
--
ALTER TABLE `pytania`
  ADD PRIMARY KEY (`id_pytania`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`,`email`),
  ADD KEY `id_klasy` (`id_klasy`);

--
-- Indexes for table `wyniki`
--
ALTER TABLE `wyniki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klasy`
--
ALTER TABLE `klasy`
  MODIFY `id_klasy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `pytania`
--
ALTER TABLE `pytania`
  MODIFY `id_pytania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT dla tabeli `wyniki`
--
ALTER TABLE `wyniki`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_klasy`) REFERENCES `klasy` (`id_klasy`);

--
-- Ograniczenia dla tabeli `wyniki`
--
ALTER TABLE `wyniki`
  ADD CONSTRAINT `wyniki_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
