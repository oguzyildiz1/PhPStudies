<h1>Login Page Notları</h1>
<ol>
    <li>Küresel değişkenler: $_GET, $_POST, $REQUEST</li>
    <li>input type="hidden" name="islem" value="kayıt"
        <p><strong>Note: </strong>Bu komut ile value'daki islem tipini yollayabiliyoruz</p>
    </li>
    <li></li>
</ol>
<h2>Php Commands</h2>
<p><strong>define("_FILEDIR", "db/data.csv")</strong> defines a global constant</p>
<p>touch() : creates a file with extension</p>
<p>mkdir() : creates a folder</p>

<h2>Resim ekleme</h2>
<p>Resimler upload edilene kadar temp klasöründe barındırılıyor</p>

<h3>Resim ekleme adımları 1</h3>
<ol>
    <ul>1. form etiketine: enctype="multipart/formt-data" ekleniyor.</ul>
    <ul>2. kaydet.php'de is $_FILES küresel değişkeni ile alınıyor.</ul>
    <ul>3. error key'e göre index.php'de mesaj veriliyor.</ul>
    <ul>3.1 Eğer error == 0 ise (hatasız ise) 5. adıma git </ul>
    <ul>3.2 Eğer error !=  ise (hatalı ise) 4. adıma git </ul>
    <ul>4.1 hata kodunu index.php'ye gönder </ul>
    <ul>4.2 index.php'de hata koduna göre mesaj yaz. </ul>
    <ul>5. Boyut sorgulaması</ul>
    <ul>5.1 Dosya boyutunu(byte) kilobyte'a çevir</ul>
    <ul>5.2 Eğer dosya 600 kb'dan küçük ise 6. adıma git</ul>
    <ul>5.3 Eğer dosya 600 kb'dan büyük ise 7. adıma git</ul>
    <ul>6. Resimleri adlandırma başlığına git</ul>
    <ul>7. Index.php'ye dönerek boyut büyük hatası ver </ul>
    <ul>8. Uzantı kontrolü</ul>
    <ul>8.1 dosya uzantılarını ve tiplerini belirten array oluştur (kaydet.php)</ul>
    <ul>8.2 Eğer yüklenen dosya tipi array'de yoksa 8.2.1'e git, varsa 8.3'e git </ul>
    <ul>8.2.1 Index.php'ye yönlendir, hata kodu ("yanlış dosya tipi") olarak bas </ul>
    // ---   self link oluşturma !!! -------- 
    // *** video : 1:20:00 (2023-02-18 (php))
    // self link  bana özel orijinal bir dosya isimleme metodu
    // icerisinde, microtime(), md5() vs kullanılıyor.
    // aynı anda 100 kullınıcı bile kaydetse, dosya isimleri ayrı ayrı oluyor. 
    <ul>9. Self link oluşturma </ul>
    <ul>9. Self link oluşturma </ul>
</ol>

<h3>Resimleri Adlandırma</h3>
<p>Resimler adlandırıp upload ediliyor.</p>
<p>Burada kaldım</p>