<?
// villages/section.php seo
$ceogate = $_SERVER['REQUEST_URI'];
if (preg_match("/sherwood/", $ceogate)) {

$APPLICATION->SetPageProperty("description", "������ - ��� ���������� ������� � �������� ����. � ���������� ������� ������ ��� ������ � ����������.");
$APPLICATION->SetPageProperty("keywords_inner", "�������, ����������, ������");
$APPLICATION->SetPageProperty("title", "���������� ������� ������ �� Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "�������, ����������, ������");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("������");
} elseif (preg_match("/riverside/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "��������� - ��� ���������� ������� �� ������ ���������. � ������� ��������� ��� ������ � ���������.");
$APPLICATION->SetPageProperty("keywords_inner", "���������, �������, ����������");
$APPLICATION->SetPageProperty("title", "���������� ������� ��������� �� Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "���������, �������, ����������");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("���������");
} elseif (preg_match("/parkavenue/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "���������� ������� ���� ����� �������� � ������������ �����. �������� �������� ��� ����������� � ������� Park Avenue ��  Villagio Estate.");
$APPLICATION->SetPageProperty("keywords_inner", "����, �����, �������, ��������, �����������, ����������, park, avenue");
$APPLICATION->SetPageProperty("title", "���������� ������� ���� ����� - ��������� � ����������� � ������� Park Avenue �� Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "����, �����, �������, ��������, �����������, ����������, park, avenue");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("���� �����");
} elseif (preg_match("/madisonpark/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "���������� ������� Medison Park ���������� � ������������ ������ ������. � ������� ������� ���� ��������� ������������ ������� ����������.");
$APPLICATION->SetPageProperty("keywords_inner", "�������, ����, �������, ����������, madison, park");
$APPLICATION->SetPageProperty("title", "���������� ������� ������� ���� -�������� ��� � ������� Madison Park �� Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "�������, ����, �������, ����������, madison, park");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} elseif (preg_match("/monteville/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "������� ������� Monteville � ��������� ��������� � ������.  Villagio Estate ���������� ���������� ������� � ���������� �������  ���������.");
$APPLICATION->SetPageProperty("keywords_inner", "���������, �������, ����������, monteville");
$APPLICATION->SetPageProperty("title", "���������� ������� ��������� - ���� � ������� Monteville �� Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "���������, �������, ����������, monteville");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} elseif (preg_match("/millennium/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "��������� ���� - ������� ���������� ������� � ������� �������� �� ����� ����. �������� ��� � ���������� ������� Millennium Park ��  Villagio Estate.");
$APPLICATION->SetPageProperty("keywords_inner", "���������, ����, �������, ����� ����, ����������, millennium, park");
$APPLICATION->SetPageProperty("title", "Millennium Park. ������� ��������� ���� - ������� ���������� ������� �� ����� ���� �� Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "���������, ����, �������, ����� ����, ����������, millennium, park");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} elseif (preg_match("/lazurnybereg/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "���������� ������� �������� ����� �� Villagio Estate ����������  �������� �� ����������� �������������.");
$APPLICATION->SetPageProperty("keywords_inner", "�������, �����, ��������, ����������");
$APPLICATION->SetPageProperty("title", "���������� ������� �������� ����� �� Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "�������, �����, ��������, ����������");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} elseif (preg_match("/greenfield/", $ceogate)) {
$APPLICATION->SetPageProperty("description", "������� ���������� ������� �������� ��  Villagio Estate. �������� ��� � ���������� ������ ������� Greenfield. ");
$APPLICATION->SetPageProperty("keywords_inner", "�������, ����������, �������, ��������, greenfield");
$APPLICATION->SetPageProperty("title", "�������� (Greenfield) - ������� ���������� ������� � ������ �� Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "�������, ����������, �������, ��������, greenfield");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("Medison Park");
} else {
$APPLICATION->SetPageProperty("description", "������� ���������� ������� �� ����� ����. ���������� ������ ������� � ���������� ������� ����������� �� ����������� �����. ���������� ������� ������� ������ � ���������� ������� ��  Villagio Estate.");
$APPLICATION->SetPageProperty("keywords_inner", "�������, �����������, ����� ����, ����������, �������, �������, �������, �����, �����, ����������, ����������� �����, �������, ����������, ������");
$APPLICATION->SetPageProperty("title", "����� ���������� ������� ����������� �� ����������� ����� - ������ ������� � ������� ������� ������� ������ �� ����� ���� � ���������� ������� �� Villagio Estate");
$APPLICATION->SetPageProperty("keywords", "�������, �����������, ����� ����, ����������, �������, �������, �������, �����, �����, ����������, ����������� �����, �������, ����������, ������");
$APPLICATION->SetPageProperty('NOT_SHOW_TITLE', 'Y');
$APPLICATION->SetTitle("�������");
}
?>