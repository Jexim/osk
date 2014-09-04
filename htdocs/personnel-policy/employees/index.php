<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Сотрудникам");
$APPLICATION->SetPageProperty("title", "Сотрудникам");
$APPLICATION->SetPageProperty("keywords", "Сотрудникам");
$APPLICATION->SetPageProperty("description", "Сотрудникам");
?>

<div class="block second">

    <p style="color: grey">Здесь будет информация для сотрудников ОСК.</p>

    <h3>Доска почета</h3>
    
    <p style="color: grey">Здесь будет список почетных сотрудников.</p>

    <h3>Социальная ответственность</h3>

    <ol class="list">
    	<li><a href="/upload/docs/common/agreement2.pdf">Отраслевое Соглашение по организациям судостроительной промышленности, морской техники и судоремонта Российской Федерации на 2013-2015 годы</a>;</li>
    	<li><a href="/upload/docs/common/agreement1.pdf">Межрегиональное Отраслевое Соглашение по организациям судостроительной промышленности, морской техники и судоремонта на 2013-2015 годы</a>.</li>
    	<li srtyle="color:gray">Здесь будет ссылка на документ корпоративной жилищной программы</li>
    </ol>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>