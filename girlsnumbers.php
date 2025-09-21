<?php
// girlsnumbers.php
// Direct download URL
$direct_download_url = "https://www.4sync.com/web/directDownload/9rO6UVS9/tTWuogNE.be5c315ba330a3c9ed08ca53b80b4337";

// Initialize downloads counter
$counter_file = 'downloads.txt';
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, 100000, LOCK_EX);
}
$download_count = (int)file_get_contents($counter_file);

// Language detection and translations
$lang = $_GET['lang'] ?? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en', 0, 2);
$translations = [
    'en' => [
        'title' => 'Girls Mobile Numbers App',
        'subtitle' => 'Connect with Singles',
        'description' => 'Click the button below to download the app.',
        'download' => 'Download App',
        'downloads' => 'Downloads:',
        'install_text' => 'If the Girls Mobile Numbers app does not install, click the How to install button.',
        'how_to_install' => 'How to install',
        'select_language' => 'Select Language:'
    ],
    'hi' => [
        'title' => 'गर्ल्स मोबाइल नंबर ऐप',
        'subtitle' => 'सिंगल्स से जुड़ें',
        'description' => 'ऐप डाउनलोड करने के लिए नीचे दिए गए बटन पर क्लिक करें।',
        'download' => 'ऐप डाउनलोड करें',
        'downloads' => 'डाउनलोड्स:',
        'install_text' => 'यदि गर्ल्स मोबाइल नंबर ऐप इंस्टॉल नहीं होता है, तो इंस्टॉल कैसे करें बटन पर क्लिक करें।',
        'how_to_install' => 'इंस्टॉल कैसे करें',
        'select_language' => 'भाषा चुनें:'
    ],
    'si' => [
        'title' => 'ගැහැණු ළමුන්ගේ ජංගම අංක යෙදුම',
        'subtitle' => 'තනිකඩ පුද්ගලයින් සමඟ සම්බන්ධ වන්න',
        'description' => 'යෙදුම බාගත කිරීමට පහත බටනය ක්ලික් කරන්න.',
        'download' => 'යෙදුම බාගන්න',
        'downloads' => 'බාගැනීම්:',
        'install_text' => 'ගැහැණු ළමුන්ගේ ජංගම අංක යෙදුම ස්ථාපනය නොවුනහොත්, ස්ථාපනය කරන්නේ කෙසේද බටනය ක්ලික් කරන්න.',
        'how_to_install' => 'ස්ථාපනය කරන්නේ කෙසේද',
        'select_language' => 'භාෂාව තෝරන්න:'
    ],
    'ta' => [
        'title' => 'பெண்கள் மொபைல் எண்கள் பயன்பாடு',
        'subtitle' => 'தனிமையில் உள்ளவர்களுடன் இணையுங்கள்',
        'description' => 'பயன்பாட்டை பதிவிறக்க கீழே உள்ள பொத்தானைக் கிளிக் செய்யவும்.',
        'download' => 'பயன்பாட்டை பதிவிறக்கவும்',
        'downloads' => 'பதிவிறக்கங்கள்:',
        'install_text' => 'பெண்கள் மொபைல் எண்கள் பயன்பாடு நிறுவப்படவில்லை என்றால், எப்படி நிறுவுவது என்பதற்கு பொத்தானைக் கிளிக் செய்யவும்.',
        'how_to_install' => 'எப்படி நிறுவுவது',
        'select_language' => 'மொழியைத் தேர்ந்தெடுக்கவும்:'
    ],
    'bn' => [
        'title' => 'গার্লস মোবাইল নম্বর অ্যাপ',
        'subtitle' => 'একক ব্যক্তিদের সাথে সংযোগ করুন',
        'description' => 'অ্যাপটি ডাউনলোড করতে নীচের বোতামে ক্লিক করুন।',
        'download' => 'অ্যাপ ডাউনলোড করুন',
        'downloads' => 'ডাউনলোড:',
        'install_text' => 'যদি গার্লস মোবাইল নম্বর অ্যাপ ইনস্টল না হয়, তাহলে কীভাবে ইনস্টল করবেন বোতামে ক্লিক করুন।',
        'how_to_install' => 'কীভাবে ইনস্টল করবেন',
        'select_language' => 'ভাষা নির্বাচন করুন:'
    ],
    'te' => [
        'title' => 'గర్ల్స్ మొబైల్ నంబర్స్ యాప్',
        'subtitle' => 'సింగిల్స్‌తో కనెక్ట్ అవ్వండి',
        'description' => 'యాప్‌ని డౌన్‌లోడ్ చేయడానికి క్రింది బటన్‌ను క్లిక్ చేయండి.',
        'download' => 'యాప్ డౌన్‌లోడ్ చేయండి',
        'downloads' => 'డౌన్‌లోడ్‌లు:',
        'install_text' => 'గర్ల్స్ మొబైల్ నంబర్స్ యాప్ ఇన్‌స్టాల్ కాకపోతే, ఎలా ఇన్‌స్టాల్ చేయాలి బటన్‌ను క్లిక్ చేయండి.',
        'how_to_install' => 'ఎలా ఇన్‌స్టాల్ చేయాలి',
        'select_language' => 'భాషను ఎంచుకోండి:'
    ],
    'mr' => [
        'title' => 'गर्ल्स मोबाईल नंबर ॲप',
        'subtitle' => 'सिंगल्सशी कनेक्ट व्हा',
        'description' => 'ॲप डाउनलोड करण्यासाठी खालील बटणावर क्लिक करा.',
        'download' => 'ॲप डाउनलोड करा',
        'downloads' => 'डाउनलोड्स:',
        'install_text' => 'जर गर्ल्स मोबाईल नंबर ॲप इंस्टॉल होत नसेल, तर इंस्टॉल कसे करायचे यावर बटणावर क्लिक करा.',
        'how_to_install' => 'इंस्टॉल कसे करायचे',
        'select_language' => 'भाषा निवडा:'
    ],
    'gu' => [
        'title' => 'ગર્લ્સ મોબાઈલ નંબર એપ',
        'subtitle' => 'સિંગલ્સ સાથે જોડાઓ',
        'description' => 'એપ ડાઉનલોડ કરવા માટે નીચેનું બટન ક્લિક કરો.',
        'download' => 'એપ ડાઉનલોડ કરો',
        'downloads' => 'ડાઉનલોડ્સ:',
        'install_text' => 'જો ગર્લ્સ મોબાઈલ નંબર એપ ઇન્સ્ટોલ ન થાય, તો ઇન્સ્ટોલ કેવી રીતે કરવું તે બટન પર ક્લિક કરો.',
        'how_to_install' => 'ઇન્સ્ટોલ કેવી રીતે કરવું',
        'select_language' => 'ભાષા પસંદ કરો:'
    ],
    'kn' => [
        'title' => 'ಗರ್ಲ್ಸ್ ಮೊಬೈಲ್ ಸಂಖ್ಯೆಗಳ ಆಪ್',
        'subtitle' => 'ಸಿಂಗಲ್ಸ್‌ನೊಂದಿಗೆ ಸಂಪರ್ಕ ಸಾಧಿಸಿ',
        'description' => 'ಆಪ್ ಡೌನ್‌ಲೋಡ್ ಮಾಡಲು ಕೆಳಗಿನ ಬಟನ್ ಕ್ಲಿಕ್ ಮಾಡಿ.',
        'download' => 'ಆಪ್ ಡೌನ್‌ಲೋಡ್ ಮಾಡಿ',
        'downloads' => 'ಡೌನ್‌ಲೋಡ್‌ಗಳು:',
        'install_text' => 'ಗರ್ಲ್ಸ್ ಮೊಬೈಲ್ ಸಂಖ್ಯೆಗಳ ಆಪ್ ಸ್ಥಾಪನೆಯಾಗದಿದ್ದರೆ, ಹೇಗೆ ಸ್ಥಾಪಿಸಬೇಕು ಎಂಬ ಬಟನ್ ಕ್ಲಿಕ್ ಮಾಡಿ.',
        'how_to_install' => 'ಹೇಗೆ ಸ್ಥಾಪಿಸಬೇಕು',
        'select_language' => 'ಭಾಷೆಯನ್ನು ಆಯ್ಕೆಮಾಡಿ:'
    ],
    'ml' => [
        'title' => 'ഗേൾസ് മൊബൈൽ നമ്പറുകൾ ആപ്പ്',
        'subtitle' => 'സിംഗിൾസുമായി ബന്ധപ്പെടുക',
        'description' => 'ആപ്പ് ഡൗൺലോഡ് ചെയ്യാൻ താഴെയുള്ള ബട്ടൺ ക്ലിക്ക് ചെയ്യുക.',
        'download' => 'ആപ്പ് ഡൗൺലോഡ് ചെയ്യുക',
        'downloads' => 'ഡൗൺലോഡുകൾ:',
        'install_text' => 'ഗേൾസ് മൊബൈൽ നമ്പറുകൾ ആപ്പ് ഇൻസ്റ്റാൾ ചെയ്യപ്പെടാത്തപക്ഷം, എങ്ങനെ ഇൻസ്റ്റാൾ ചെയ്യാം എന്ന ബട്ടൺ ക്ലിക്ക് ചെയ്യുക.',
        'how_to_install' => 'എങ്ങനെ ഇൻസ്റ്റാൾ ചെയ്യാം',
        'select_language' => 'ഭാഷ തിരഞ്ഞെടുക്കുക:'
    ],
    'pa' => [
        'title' => 'ਗਰਲਜ਼ ਮੋਬਾਈਲ ਨੰਬਰ ਐਪ',
        'subtitle' => 'ਸਿੰਗਲਜ਼ ਨਾਲ ਜੁੜੋ',
        'description' => 'ਐਪ ਡਾਊਨਲੋਡ ਕਰਨ ਲਈ ਹੇਠਾਂ ਦਿੱਤੇ ਬਟਨ ਨੂੰ ਕਲਿੱਕ ਕਰੋ।',
        'download' => 'ਐਪ ਡਾਊਨਲੋਡ ਕਰੋ',
        'downloads' => 'ਡਾਊਨਲੋਡਸ:',
        'install_text' => 'ਜੇਕਰ ਗਰਲਜ਼ ਮੋਬਾਈਲ ਨੰਬਰ ਐਪ ਇੰਸਟਾਲ ਨਹੀਂ ਹੁੰਦੀ, ਤਾਂ ਇੰਸਟਾਲ ਕਿਵੇਂ ਕਰਨਾ ਹੈ ਬਟਨ ਨੂੰ ਕਲਿੱਕ ਕਰੋ।',
        'how_to_install' => 'ਇੰਸਟਾਲ ਕਿਵੇਂ ਕਰਨਾ ਹੈ',
        'select_language' => 'ਭਾਸ਼ਾ ਚੁਣੋ:'
    ],
    'ar' => [
        'title' => 'تطبيق أرقام هواتف الفتيات',
        'subtitle' => 'تواصل مع العزاب',
        'description' => 'انقر على الزر أدناه لتحميل التطبيق.',
        'download' => 'تحميل التطبيق',
        'downloads' => 'التحميلات:',
        'install_text' => 'إذا لم يتم تثبيت تطبيق أرقام هواتف الفتيات، انقر على زر كيفية التثبيت.',
        'how_to_install' => 'كيفية التثبيت',
        'select_language' => 'اختر اللغة:'
    ],
    'zh' => [
        'title' => '女孩手机号码应用',
        'subtitle' => '与单身人士联系',
        'description' => '点击下面的按钮下载应用。',
        'download' => '下载应用',
        'downloads' => '下载量:',
        'install_text' => '如果女孩手机号码应用未安装，请点击如何安装按钮。',
        'how_to_install' => '如何安装',
        'select_language' => '选择语言:'
    ],
    'es' => [
        'title' => 'Aplicación de Números de Teléfono de Chicas',
        'subtitle' => 'Conecta con Solteros',
        'description' => 'Haz clic en el botón de abajo para descargar la aplicación.',
        'download' => 'Descargar Aplicación',
        'downloads' => 'Descargas:',
        'install_text' => 'Si la aplicación de Números de Teléfono de Chicas no se instala, haz clic en el botón de Cómo instalar.',
        'how_to_install' => 'Cómo instalar',
        'select_language' => 'Seleccionar Idioma:'
    ],
    'fr' => [
        'title' => 'Application Numéros de Téléphone des Filles',
        'subtitle' => 'Connectez-vous avec des Célibataires',
        'description' => 'Cliquez sur le bouton ci-dessous pour télécharger l\'application.',
        'download' => 'Télécharger l\'Application',
        'downloads' => 'Téléchargements:',
        'install_text' => 'Si l\'application Numéros de Téléphone des Filles ne s\'installe pas, cliquez sur le bouton Comment installer.',
        'how_to_install' => 'Comment installer',
        'select_language' => 'Sélectionner la Langue:'
    ],
    'de' => [
        'title' => 'Mädchen-Telefonnummern-App',
        'subtitle' => 'Verbinde dich mit Singles',
        'description' => 'Klicke auf den Button unten, um die App herunterzuladen.',
        'download' => 'App herunterladen',
        'downloads' => 'Downloads:',
        'install_text' => 'Falls die Mädchen-Telefonnummern-App nicht installiert wird, klicke auf den Button „Wie installieren".',
        'how_to_install' => 'Wie installieren',
        'select_language' => 'Sprache auswählen:'
    ],
    'ru' => [
        'title' => 'Приложение Номера Телефонов Девочек',
        'subtitle' => 'Связывайся с Одинокими',
        'description' => 'Нажмите на кнопку ниже, чтобы скачать приложение.',
        'download' => 'Скачать Приложение',
        'downloads' => 'Загрузки:',
        'install_text' => 'Если приложение Номера Телефонов Девочек не устанавливается, нажмите на кнопку „Как установить".',
        'how_to_install' => 'Как установить',
        'select_language' => 'Выберите язык:'
    ],
    'pt' => [
        'title' => 'Aplicativo de Números de Telefone de Meninas',
        'subtitle' => 'Conecte-se com Solteiros',
        'description' => 'Clique no botão abaixo para baixar o aplicativo.',
        'download' => 'Baixar Aplicativo',
        'downloads' => 'Downloads:',
        'install_text' => 'Se o aplicativo de Números de Telefone de Meninas não for instalado, clique no botão Como instalar.',
        'how_to_install' => 'Como instalar',
        'select_language' => 'Selecionar Idioma:'
    ],
    'ja' => [
        'title' => 'ガールズモバイルナンバーアプリ',
        'subtitle' => '独身者とつながる',
        'description' => '以下のボタンをクリックしてアプリをダウンロードしてください。',
        'download' => 'アプリをダウンロード',
        'downloads' => 'ダウンロード数:',
        'install_text' => 'ガールズモバイルナンバーアプリがインストールされない場合は、「インストール方法」ボタンをクリックしてください。',
        'how_to_install' => 'インストール方法',
        'select_language' => '言語を選択:'
    ],
    'ko' => [
        'title' => '소녀들 모바일 번호 앱',
        'subtitle' => '싱글들과 연결하세요',
        'description' => '아래 버튼을 클릭하여 앱을 다운로드하세요.',
        'download' => '앱 다운로드',
        'downloads' => '다운로드 수:',
        'install_text' => '소녀들 모바일 번호 앱이 설치되지 않는 경우, 설치 방법 버튼을 클릭하세요.',
        'how_to_install' => '설치 방법',
        'select_language' => '언어 선택:'
    ],
    'id' => [
        'title' => 'Aplikasi Nomor HP Gadis',
        'subtitle' => 'Terhubung dengan Jomblo',
        'description' => 'Klik tombol di bawah untuk mengunduh aplikasi.',
        'download' => 'Unduh Aplikasi',
        'downloads' => 'Unduhan:',
        'install_text' => 'Jika aplikasi Nomor HP Gadis tidak terinstall, klik tombol Cara install.',
        'how_to_install' => 'Cara install',
        'select_language' => 'Pilih Bahasa:'
    ],
    'ms' => [
        'title' => 'Aplikasi Nombor Telefon Gadis',
        'subtitle' => 'Berhubung dengan Bujang',
        'description' => 'Klik butang di bawah untuk muat turun aplikasi.',
        'download' => 'Muat Turun Aplikasi',
        'downloads' => 'Muat Turun:',
        'install_text' => 'Jika aplikasi Nombor Telefon Gadis tidak dipasang, klik butang Cara pasang.',
        'how_to_install' => 'Cara pasang',
        'select_language' => 'Pilih Bahasa:'
    ],
    'th' => [
        'title' => 'แอปหมายเลขโทรศัพท์สาวๆ',
        'subtitle' => 'เชื่อมต่อกับคนโสด',
        'description' => 'คลิกปุ่มด้านล่างเพื่อดาวน์โหลดแอป',
        'download' => 'ดาวน์โหลดแอป',
        'downloads' => 'การดาวน์โหลด:',
        'install_text' => 'หากแอปหมายเลขโทรศัพท์สาวๆ ติดตั้งไม่ได้ ให้คลิกปุ่มวิธีติดตั้ง',
        'how_to_install' => 'วิธีติดตั้ง',
        'select_language' => 'เลือกภาษา:'
    ],
    'vi' => [
        'title' => 'Ứng Dụng Số Điện Thoại Gái',
        'subtitle' => 'Kết Nối Với Độc Thân',
        'description' => 'Nhấp vào nút bên dưới để tải xuống ứng dụng.',
        'download' => 'Tải Xuống Ứng Dụng',
        'downloads' => 'Lượt Tải:',
        'install_text' => 'Nếu ứng dụng Số Điện Thoại Gái không cài đặt được, hãy nhấp vào nút Cách cài đặt.',
        'how_to_install' => 'Cách cài đặt',
        'select_language' => 'Chọn Ngôn Ngữ:'
    ],
    'fil' => [
        'title' => 'Girls Mobile Numbers App',
        'subtitle' => 'Makipag-ugnayan sa mga Single',
        'description' => 'I-click ang button sa ibaba upang i-download ang app.',
        'download' => 'I-download ang App',
        'downloads' => 'Mga Download:',
        'install_text' => 'Kung hindi ma-install ang Girls Mobile Numbers app, i-click ang button na Paano mag-install.',
        'how_to_install' => 'Paano mag-install',
        'select_language' => 'Pumili ng Wika:'
    ],
    'tr' => [
        'title' => 'Kızlar Cep Telefonu Numaraları Uygulaması',
        'subtitle' => 'Bekarlarla Bağlantı Kurun',
        'description' => 'Uygulamayı indirmek için aşağıdaki düğmeyi tıklayın.',
        'download' => 'Uygulamayı İndir',
        'downloads' => 'İndirmeler:',
        'install_text' => 'Kızlar Cep Telefonu Numaraları uygulaması yüklenmezse, Nasıl yüklenir düğmesini tıklayın.',
        'how_to_install' => 'Nasıl yüklenir',
        'select_language' => 'Dil Seçin:'
    ],
    'fa' => [
        'title' => 'اپلیکیشن شماره موبایل دختران',
        'subtitle' => 'با مجردها ارتباط برقرار کنید',
        'description' => 'برای دانلود اپلیکیشن روی دکمه زیر کلیک کنید.',
        'download' => 'دانلود اپلیکیشن',
        'downloads' => 'دانلودها:',
        'install_text' => 'اگر اپلیکیشن شماره موبایل دختران نصب نشد، روی دکمه نحوه نصب کلیک کنید.',
        'how_to_install' => 'نحوه نصب',
        'select_language' => 'انتخاب زبان:'
    ],
    'ur' => [
        'title' => 'لڑکیوں کے موبائل نمبر ایپ',
        'subtitle' => 'سنگل لوگوں سے رابطہ کریں',
        'description' => 'ایپ ڈاؤن لوڈ کرنے کے لیے نیچے کا بٹن دبائیں۔',
        'download' => 'ایپ ڈاؤن لوڈ کریں',
        'downloads' => 'ڈاؤن لوڈز:',
        'install_text' => 'اگر لڑکیوں کے موبائل نمبر ایپ انسٹال نہیں ہوتی، تو انسٹال کیسے کریں کا بٹن دبائیں۔',
        'how_to_install' => 'انسٹال کیسے کریں',
        'select_language' => 'زبان منتخب کریں:'
    ],
    'he' => [
        'title' => 'אפליקציית מספרי טלפון של בנות',
        'subtitle' => 'התחבר עם רווקים',
        'description' => 'לחץ על הכפתור למטה להורדת האפליקציה.',
        'download' => 'הורד אפליקציה',
        'downloads' => 'הורדות:',
        'install_text' => 'אם אפליקציית מספרי הטלפון של בנות לא מתקנת, לחץ על כפתור איך להתקין.',
        'how_to_install' => 'איך להתקין',
        'select_language' => 'בחר שפה:'
    ],
    'el' => [
        'title' => 'Εφαρμογή Αριθμών Κινητού Κοριτσιών',
        'subtitle' => 'Συνδεθείτε με Εργένηδες',
        'description' => 'Κάντε κλικ στο κουμπί παρακάτω για να κατεβάσετε την εφαρμογή.',
        'download' => 'Κατεβάστε την Εφαρμογή',
        'downloads' => 'Λήψεις:',
        'install_text' => 'Αν η εφαρμογή Αριθμών Κινητού Κοριτσιών δεν εγκατασταθεί, κάντε κλικ στο κουμπί Πώς να εγκαταστήσετε.',
        'how_to_install' => 'Πώς να εγκαταστήσετε',
        'select_language' => 'Επιλέξτε Γλώσσα:'
    ],
    'it' => [
        'title' => 'App Numeri di Telefono Ragazze',
        'subtitle' => 'Connettiti con Single',
        'description' => 'Clicca il pulsante sotto per scaricare l\'app.',
        'download' => 'Scarica App',
        'downloads' => 'Download:',
        'install_text' => 'Se l\'app Numeri di Telefono Ragazze non si installa, clicca il pulsante Come installare.',
        'how_to_install' => 'Come installare',
        'select_language' => 'Seleziona Lingua:'
    ],
    'nl' => [
        'title' => 'Meisjes Telefoonnummer App',
        'subtitle' => 'Verbind met Singles',
        'description' => 'Klik op de knop hieronder om de app te downloaden.',
        'download' => 'Download App',
        'downloads' => 'Downloads:',
        'install_text' => 'Als de Meisjes Telefoonnummer app niet installeert, klik op de knop Hoe te installeren.',
        'how_to_install' => 'Hoe te installeren',
        'select_language' => 'Selecteer Taal:'
    ],
    'sv' => [
        'title' => 'Tjejers Mobilnummer App',
        'subtitle' => 'Anslut med Singlar',
        'description' => 'Klicka på knappen nedan för att ladda ner appen.',
        'download' => 'Ladda ner App',
        'downloads' => 'Nedladdningar:',
        'install_text' => 'Om Tjejers Mobilnummer-appen inte installeras, klicka på knappen Hur man installerar.',
        'how_to_install' => 'Hur man installerar',
        'select_language' => 'Välj Språk:'
    ],
    'no' => [
        'title' => 'Jenter Mobilnummer App',
        'subtitle' => 'Koble til med Singler',
        'description' => 'Klikk på knappen nedenfor for å laste ned appen.',
        'download' => 'Last ned App',
        'downloads' => 'Nedlastinger:',
        'install_text' => 'Hvis Jenter Mobilnummer-appen ikke installeres, klikk på knappen Hvordan installere.',
        'how_to_install' => 'Hvordan installere',
        'select_language' => 'Velg Språk:'
    ],
    'da' => [
        'title' => 'Pigers Mobilnummer App',
        'subtitle' => 'Forbind med Singler',
        'description' => 'Klik på knappen nedenfor for at downloade appen.',
        'download' => 'Download App',
        'downloads' => 'Downloads:',
        'install_text' => 'Hvis Pigers Mobilnummer-appen ikke installeres, klik på knappen Hvordan installere.',
        'how_to_install' => 'Hvordan installere',
        'select_language' => 'Vælg Sprog:'
    ],
    'fi' => [
        'title' => 'Tyttöjen Matkapuhelinnumero Sovellus',
        'subtitle' => 'Yhdistä Sinkkujen kanssa',
        'description' => 'Napsauta alla olevaa painiketta ladataksesi sovelluksen.',
        'download' => 'Lataa Sovellus',
        'downloads' => 'Lataukset:',
        'install_text' => 'Jos Tyttöjen Matkapuhelinnumero -sovellus ei asennu, napsauta Kuinka asentaa -painiketta.',
        'how_to_install' => 'Kuinka asentaa',
        'select_language' => 'Valitse Kieli:'
    ],
    'pl' => [
        'title' => 'Aplikacja Numery Telefonu Dziewczyn',
        'subtitle' => 'Połącz się z Singlami',
        'description' => 'Kliknij przycisk poniżej, aby pobrać aplikację.',
        'download' => 'Pobierz Aplikację',
        'downloads' => 'Pobrania:',
        'install_text' => 'Jeśli aplikacja Numery Telefonu Dziewczyn się nie zainstaluje, kliknij przycisk Jak zainstalować.',
        'how_to_install' => 'Jak zainstalować',
        'select_language' => 'Wybierz Język:'
    ],
    'cs' => [
        'title' => 'Aplikace Telefonní Čísla Dívek',
        'subtitle' => 'Spojte se se Svobodnými',
        'description' => 'Klikněte na tlačítko níže pro stažení aplikace.',
        'download' => 'Stáhnout Aplikaci',
        'downloads' => 'Stažení:',
        'install_text' => 'Pokud se aplikace Telefonní Čísla Dívek nenainstaluje, klikněte na tlačítko Jak nainstalovat.',
        'how_to_install' => 'Jak nainstalovat',
        'select_language' => 'Vyberte Jazyk:'
    ],
    'hu' => [
        'title' => 'Lányok Mobilszám Alkalmazás',
        'subtitle' => 'Kapcsolódj Egyedülállókkal',
        'description' => 'Kattints az alábbi gombra az alkalmazás letöltéséhez.',
        'download' => 'Alkalmazás Letöltése',
        'downloads' => 'Letöltések:',
        'install_text' => 'Ha a Lányok Mobilszám alkalmazás nem települ, kattints a Hogyan telepítsük gombra.',
        'how_to_install' => 'Hogyan telepítsük',
        'select_language' => 'Nyelv Kiválasztása:'
    ],
    'ro' => [
        'title' => 'Aplicația Numere de Telefon Fete',
        'subtitle' => 'Conectează-te cu Necăsătoriți',
        'description' => 'Faceți clic pe butonul de mai jos pentru a descărca aplicația.',
        'download' => 'Descarcă Aplicația',
        'downloads' => 'Descărcări:',
        'install_text' => 'Dacă aplicația Numere de Telefon Fete nu se instalează, faceți clic pe butonul Cum să instalez.',
        'how_to_install' => 'Cum să instalez',
        'select_language' => 'Selectați Limba:'
    ],
    'bg' => [
        'title' => 'Приложение за Телефонни Номера на Момичета',
        'subtitle' => 'Свържете се със Самотни',
        'description' => 'Кликнете върху бутона по-долу, за да изтеглите приложението.',
        'download' => 'Изтеглете Приложението',
        'downloads' => 'Изтегляния:',
        'install_text' => 'Ако приложението за Телефонни Номера на Момичета не се инсталира, кликнете върху бутона Как да инсталирам.',
        'how_to_install' => 'Как да инсталирам',
        'select_language' => 'Изберете Език:'
    ],
    'hr' => [
        'title' => 'Aplikacija Brojevi Telefona Djevojaka',
        'subtitle' => 'Povezivanje s Neoženjenim',
        'description' => 'Kliknite gumb ispod da preuzmete aplikaciju.',
        'download' => 'Preuzmite Aplikaciju',
        'downloads' => 'Preuzimanja:',
        'install_text' => 'Ako se aplikacija Brojevi Telefona Djevojaka ne instalira, kliknite gumb Kako instalirati.',
        'how_to_install' => 'Kako instalirati',
        'select_language' => 'Odaberite Jezik:'
    ],
    'sr' => [
        'title' => 'Апликација Бројеви Телефона Девојака',
        'subtitle' => 'Повежите се са Неожењенима',
        'description' => 'Кликните на дугме испод да преузмете апликацију.',
        'download' => 'Преузмите Апликацију',
        'downloads' => 'Преузимања:',
        'install_text' => 'Ако се апликација Бројеви Телефона Девојака не инсталира, кликните на дугме Како да инсталирам.',
        'how_to_install' => 'Како да инсталирам',
        'select_language' => 'Изаберите Језик:'
    ],
    'sk' => [
        'title' => 'Aplikácia Telefónne Čísla Dievčat',
        'subtitle' => 'Spojte sa s Neženatými',
        'description' => 'Kliknite na tlačidlo nižšie na stiahnutie aplikácie.',
        'download' => 'Stiahnuť Aplikáciu',
        'downloads' => 'Stiahnutia:',
        'install_text' => 'Ak sa aplikácia Telefónne Čísla Dievčat nenaištaluje, kliknite na tlačidlo Ako nainštalovať.',
        'how_to_install' => 'Ako nainštalovať',
        'select_language' => 'Vyberte Jazyk:'
    ],
    'sl' => [
        'title' => 'Aplikacija Telefonske Številke Deklet',
        'subtitle' => 'Povežite se s Samskimi',
        'description' => 'Kliknite gumb spodaj, da prenesete aplikacijo.',
        'download' => 'Prenesite Aplikacijo',
        'downloads' => 'Prenosi:',
        'install_text' => 'Če se aplikacija Telefonske Številke Deklet ne namesti, kliknite gumb Kako namestiti.',
        'how_to_install' => 'Kako namestiti',
        'select_language' => 'Izberite Jezik:'
    ],
    'lt' => [
        'title' => 'Mergaitėms Telefono Numeriai Programa',
        'subtitle' => 'Prisijunkite prie Vienišių',
        'description' => 'Spustelėkite žemiau esantį mygtuką, kad atsisiųstumėte programą.',
        'download' => 'Atsisiųsti Programą',
        'downloads' => 'Atsisiuntimai:',
        'install_text' => 'Jei Mergaitėms Telefono Numeriai programa neįdiegiama, spustelėkite mygtuką Kaip įdiegti.',
        'how_to_install' => 'Kaip įdiegti',
        'select_language' => 'Pasirinkite Kalbą:'
    ],
    'lv' => [
        'title' => 'Meiteņu Telefona Numuru Lietotne',
        'subtitle' => 'Savienojieties ar Neprecētiem',
        'description' => 'Noklikšķiniet uz pogas zemāk, lai lejupielādētu lietotni.',
        'download' => 'Lejupielādēt Lietotni',
        'downloads' => 'Lejupielādes:',
        'install_text' => 'Ja Meiteņu Telefona Numuru lietotne neinstalējas, noklikšķiniet uz pogas Kā instalēt.',
        'how_to_install' => 'Kā instalēt',
        'select_language' => 'Izvēlieties Valodu:'
    ]
];

$lang = isset($translations[$lang]) ? $lang : 'en';

// Language options with Sinhala at position 37
$language_options = [
    ['en', 'English'],
    ['hi', 'हिन्दी (Hindi)'],
    ['ar', 'العربية (Arabic)'],
    ['bn', 'বাংলা (Bengali)'],
    ['bg', 'Български (Bulgarian)'],
    ['zh', '中文 (Chinese)'],
    ['hr', 'Hrvatski (Croatian)'],
    ['cs', 'Čeština (Czech)'],
    ['da', 'Dansk (Danish)'],
    ['nl', 'Nederlands (Dutch)'],
    ['fil', 'Filipino'],
    ['fi', 'Suomi (Finnish)'],
    ['fr', 'Français (French)'],
    ['de', 'Deutsch (German)'],
    ['el', 'Ελληνικά (Greek)'],
    ['gu', 'ગુજરાતી (Gujarati)'],
    ['he', 'עברית (Hebrew)'],
    ['hu', 'Magyar (Hungarian)'],
    ['id', 'Bahasa Indonesia'],
    ['it', 'Italiano (Italian)'],
    ['ja', '日本語 (Japanese)'],
    ['kn', 'ಕನ್ನಡ (Kannada)'],
    ['ko', '한국어 (Korean)'],
    ['lv', 'Latviešu (Latvian)'],
    ['lt', 'Lietuvių (Lithuanian)'],
    ['ml', 'മലയാളം (Malayalam)'],
    ['ms', 'Bahasa Melayu (Malay)'],
    ['mr', 'मराठी (Marathi)'],
    ['no', 'Norsk (Norwegian)'],
    ['fa', 'فارسی (Persian)'],
    ['pl', 'Polski (Polish)'],
    ['pt', 'Português (Portuguese)'],
    ['pa', 'ਪੰਜਾਬੀ (Punjabi)'],
    ['ro', 'Română (Romanian)'],
    ['ru', 'Русский (Russian)'],
    ['sr', 'Српски (Serbian)'],
    ['si', 'සිංහල (Sinhala)'], // Position 37
    ['sk', 'Slovenčina (Slovak)'],
    ['sl', 'Slovenščina (Slovenian)'],
    ['es', 'Español (Spanish)'],
    ['sv', 'Svenska (Swedish)'],
    ['ta', 'தமிழ் (Tamil)'],
    ['te', 'తెలుగు (Telugu)'],
    ['th', 'ไทย (Thai)'],
    ['tr', 'Türkçe (Turkish)'],
    ['ur', 'اردو (Urdu)'],
    ['vi', 'Tiếng Việt (Vietnamese)']
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $translations[$lang]['title']; ?> - Download Now for Love & Chat</title>
    <meta name="description" content="Download our Girls Mobile Numbers app to connect with singles, find love, and chat with girls. Join the best dating platform for romance and relationships in India.">
    <meta name="keywords" content="indian dating, love, girls number, online dating, indian girls, chat with girls, dating app, romantic chat, meet girls, indian love, dating site, find love, girls contact, dating in india, love connection">
    <meta name="robots" content="index, follow">
    
    <!-- PWA Meta Tags -->
    <meta name="theme-color" content="#ff6b6b">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" as="style">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #ff6b6b;
            --primary-dark: #e55a5a;
            --secondary-color: #4ecdc4;
            --accent-color: #ffe66d;
            --text-dark: #2d3436;
            --text-light: #636e72;
            --background: #ffffff;
            --surface: #f8f9fa;
            --shadow: rgba(0, 0, 0, 0.1);
            --shadow-strong: rgba(0, 0, 0, 0.15);
            --gradient: linear-gradient(135deg, #ff6b6b 0%, #4ecdc4 100%);
            --border-radius: 16px;
            --border-radius-small: 8px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--gradient);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: var(--text-dark);
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 25% 25%, rgba(255, 107, 107, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(78, 205, 196, 0.1) 0%, transparent 50%);
            z-index: -1;
            animation: backgroundMove 20s ease-in-out infinite alternate;
        }

        @keyframes backgroundMove {
            0% { transform: scale(1) rotate(0deg); }
            100% { transform: scale(1.1) rotate(5deg); }
        }

        .container {
            width: 100%;
            max-width: 420px;
            position: relative;
            z-index: 1;
        }

        .app-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: 
                0 20px 40px var(--shadow-strong),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: slideUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .app-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
            border-radius: var(--border-radius) var(--border-radius) 0 0;
        }

        .language-selector {
            margin-bottom: 2rem;
            position: relative;
        }

        .language-selector label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
            font-size: 0.875rem;
        }

        .language-selector select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: var(--border-radius-small);
            font-size: 14px;
            font-weight: 400;
            background: white;
            color: var(--text-dark);
            cursor: pointer;
            transition: var(--transition);
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23666' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><polyline points='6,9 12,15 18,9'></polyline></svg>");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
            padding-right: 40px;
        }

        .language-selector select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(255, 107, 107, 0.1);
        }

        .app-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: var(--border-radius);
            margin: 0 auto 1.5rem;
            display: block;
            box-shadow: 0 8px 25px var(--shadow);
            animation: imageFloat 6s ease-in-out infinite;
            transition: var(--transition);
        }

        .app-image:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 35px var(--shadow-strong);
        }

        @keyframes imageFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .app-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.2;
        }

        .app-subtitle {
            font-size: 1.125rem;
            font-weight: 500;
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        .app-description {
            color: var(--text-light);
            margin-bottom: 2rem;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .download-section {
            margin-bottom: 2rem;
        }

        .download-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 16px 24px;
            background: var(--gradient);
            color: white;
            text-decoration: none;
            font-size: 1.125rem;
            font-weight: 600;
            border-radius: var(--border-radius-small);
            border: none;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .download-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 107, 0.4);
        }

        .download-btn:hover::before {
            left: 100%;
        }

        .download-btn:active {
            transform: translateY(0);
        }

        .download-icon {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        .stats-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin: 1rem 0;
            padding: 12px;
            background: rgba(255, 107, 107, 0.05);
            border-radius: var(--border-radius-small);
            border: 1px solid rgba(255, 107, 107, 0.1);
        }

        .stats-icon {
            width: 16px;
            height: 16px;
            fill: var(--primary-color);
        }

        .stats-text {
            font-weight: 600;
            color: var(--primary-color);
            font-size: 0.95rem;
        }

        .install-notice {
            background: rgba(78, 205, 196, 0.05);
            border: 1px solid rgba(78, 205, 196, 0.2);
            border-radius: var(--border-radius-small);
            padding: 16px;
            margin: 1.5rem 0;
            font-size: 0.9rem;
            color: var(--text-light);
            line-height: 1.5;
        }

        .help-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            background: transparent;
            border: 2px solid var(--secondary-color);
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
            border-radius: var(--border-radius-small);
            transition: var(--transition);
            font-size: 0.95rem;
        }

        .help-btn:hover {
            background: var(--secondary-color);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(78, 205, 196, 0.3);
        }

        .help-icon {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        .cookie-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            padding: 20px;
        }

        .cookie-modal.show {
            opacity: 1;
            visibility: visible;
        }

        .cookie-content {
            background: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            max-width: 400px;
            width: 100%;
            text-align: center;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            animation: modalScale 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes modalScale {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .cookie-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .cookie-text {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        .cookie-actions {
            display: flex;
            gap: 12px;
        }

        .cookie-btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: var(--border-radius-small);
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }

        .cookie-btn.accept {
            background: var(--primary-color);
            color: white;
        }

        .cookie-btn.accept:hover {
            background: var(--primary-dark);
        }

        .cookie-btn.decline {
            background: #f1f3f4;
            color: var(--text-dark);
        }

        .cookie-btn.decline:hover {
            background: #e8eaed;
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .loading-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 640px) {
            body {
                padding: 16px;
            }
            
            .app-card {
                padding: 1.5rem;
            }
            
            .app-title {
                font-size: 1.5rem;
            }
            
            .app-subtitle {
                font-size: 1rem;
            }
            
            .download-btn {
                font-size: 1rem;
                padding: 14px 20px;
            }
            
            .language-selector select {
                font-size: 13px;
            }
            
            .cookie-content {
                padding: 1.5rem;
                margin: 16px;
            }
        }

        @media (max-width: 480px) {
            .app-card {
                padding: 1.25rem;
            }
            
            .app-image {
                width: 100px;
                height: 100px;
            }
            
            .cookie-actions {
                flex-direction: column;
            }
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            
            .app-image {
                animation: none;
            }
            
            body::before {
                animation: none;
            }
        }

        /* Focus states for better accessibility */
        .download-btn:focus,
        .help-btn:focus,
        .cookie-btn:focus {
            outline: 3px solid rgba(255, 107, 107, 0.3);
            outline-offset: 2px;
        }

        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            .app-card {
                background: rgba(30, 30, 30, 0.95);
                color: #ffffff;
            }
            
            .language-selector select {
                background: #2a2a2a;
                border-color: #444;
                color: #ffffff;
            }
            
            .cookie-content {
                background: #2a2a2a;
                color: #ffffff;
            }
        }
    </style>
</head>
<body>
    <!-- Loading Overlay -->
    <div id="loading-overlay" class="loading-overlay">
        <div class="spinner"></div>
    </div>

    <!-- Cookie Consent Modal -->
    <div id="cookie-modal" class="cookie-modal">
        <div class="cookie-content">
            <h3 class="cookie-title"><?php echo $translations[$lang]['title']; ?>?</h3>
            <p class="cookie-text">We use cookies to enhance your experience. Do you accept cookies?</p>
            <div class="cookie-actions">
                <button class="cookie-btn accept" onclick="acceptCookies()">Yes</button>
                <button class="cookie-btn decline" onclick="declineCookies()">No</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="app-card">
            <!-- Language Selector -->
            <div class="language-selector">
                <label for="language"><?php echo $translations[$lang]['select_language']; ?></label>
                <select id="language" onchange="changeLanguage(this.value)">
                    <?php foreach ($language_options as $option): ?>
                        <option value="<?php echo $option[0]; ?>" <?php echo $lang == $option[0] ? 'selected' : ''; ?>>
                            <?php echo $option[1]; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- App Image -->
            <img src="https://girlsnumbersforchat.likesyou.org/1.png" 
                 alt="<?php echo $translations[$lang]['title']; ?>" 
                 class="app-image"
                 loading="lazy">

            <!-- App Info -->
            <h1 class="app-title"><?php echo $translations[$lang]['title']; ?></h1>
            <h2 class="app-subtitle"><?php echo $translations[$lang]['subtitle']; ?></h2>
            <p class="app-description"><?php echo $translations[$lang]['description']; ?></p>

            <!-- Download Section -->
            <div class="download-section">
                <a href="increment_download.php?redirect=<?php echo urlencode($direct_download_url); ?>" 
                   class="download-btn" 
                   onclick="showLoading()">
                    <svg class="download-icon" viewBox="0 0 24 24">
                        <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                    </svg>
                    <?php echo $translations[$lang]['download']; ?>
                </a>
            </div>

            <!-- Statistics -->
            <div class="stats-section">
                <svg class="stats-icon" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
                <span class="stats-text"><?php echo $translations[$lang]['downloads']; ?> <?php echo number_format($download_count); ?></span>
            </div>

            <!-- Install Notice -->
            <div class="install-notice">
                <?php echo $translations[$lang]['install_text']; ?>
            </div>

            <!-- Help Button -->
            <a href="https://girlsnumbersforchat.likesyou.org/pp.php" 
               class="help-btn" 
               target="_blank" 
               rel="noopener">
                <svg class="help-icon" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
                </svg>
                <?php echo $translations[$lang]['how_to_install']; ?>
            </a>
        </div>
    </div>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?php echo $translations[$lang]['title']; ?> - Download Now for Love & Chat",
        "description": "Download our Girls Mobile Numbers app to connect with singles, find love, and chat with girls. Join the best dating platform for romance and relationships in India.",
        "url": "https://girlsnumbersforchat.likesyou.org/girlsnumbers.php",
        "image": "https://girlsnumbersforchat.likesyou.org/1.png",
        "publisher": {
            "@type": "Organization",
            "name": "Girls Mobile Numbers App"
        },
        "downloadUrl": "<?php echo $direct_download_url; ?>",
        "softwareVersion": "2.0",
        "operatingSystem": "Android",
        "applicationCategory": "Social"
    }
    </script>

    <script>
        // Global variables
        let cookiesAccepted = false;

        // Initialize the app
        document.addEventListener('DOMContentLoaded', function() {
            checkCookieConsent();
            initializeInteractions();
        });

        // Cookie management
        function checkCookieConsent() {
            const consent = localStorage.getItem('cookies_accepted');
            const cookiesEnabled = areCookiesEnabled();
            
            if (!consent || !cookiesEnabled) {
                showCookieModal();
            } else {
                cookiesAccepted = true;
            }
        }

        function areCookiesEnabled() {
            try {
                document.cookie = "testcookie=1; SameSite=Lax";
                const enabled = document.cookie.indexOf("testcookie") !== -1;
                document.cookie = "testcookie=; expires=Thu, 01 Jan 1970 00:00:00 UTC; SameSite=Lax;";
                return enabled;
            } catch (e) {
                return false;
            }
        }

        function showCookieModal() {
            const modal = document.getElementById('cookie-modal');
            modal.classList.add('show');
        }

        function hideCookieModal() {
            const modal = document.getElementById('cookie-modal');
            modal.classList.remove('show');
        }

        function acceptCookies() {
            if (!areCookiesEnabled()) {
                alert("Cookies are disabled in your browser. Please enable cookies for the best experience:\n\n1. Go to browser Settings\n2. Find Privacy/Cookies settings\n3. Allow cookies\n4. Refresh this page");
                return;
            }
            
            try {
                localStorage.setItem('cookies_accepted', 'true');
                cookiesAccepted = true;
                hideCookieModal();
                
                // Track acceptance
                if (typeof gtag !== 'undefined') {
                    gtag('consent', 'update', {
                        analytics_storage: 'granted'
                    });
                }
            } catch (e) {
                console.error('Error saving cookie consent:', e);
            }
        }

        function declineCookies() {
            hideCookieModal();
            // Optionally redirect or show limited functionality
        }

        // Language change with smooth transition
        function changeLanguage(newLang) {
            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('lang', newLang);
            
            showLoading();
            
            setTimeout(() => {
                window.location.href = currentUrl.toString();
            }, 300);
        }

        // Loading state management
        function showLoading() {
            const overlay = document.getElementById('loading-overlay');
            overlay.classList.add('show');
        }

        function hideLoading() {
            const overlay = document.getElementById('loading-overlay');
            overlay.classList.remove('show');
        }

        // Initialize interactive features
        function initializeInteractions() {
            // Add subtle parallax effect to background
            if (window.innerWidth > 768) {
                document.addEventListener('mousemove', function(e) {
                    const { clientX, clientY } = e;
                    const { innerWidth, innerHeight } = window;
                    
                    const xPercent = (clientX / innerWidth) * 100;
                    const yPercent = (clientY / innerHeight) * 100;
                    
                    document.body.style.setProperty('--mouse-x', `${xPercent}%`);
                    document.body.style.setProperty('--mouse-y', `${yPercent}%`);
                });
            }

            // Add download tracking
            const downloadBtn = document.querySelector('.download-btn');
            if (downloadBtn) {
                downloadBtn.addEventListener('click', function(e) {
                    // Track download attempt
                    if (cookiesAccepted && typeof gtag !== 'undefined') {
                        gtag('event', 'download_start', {
                            event_category: 'app_download',
                            event_label: 'girls_mobile_numbers'
                        });
                    }
                    
                    // Add visual feedback
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            }

            // Intersection Observer for animations
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.animationPlayState = 'running';
                        }
                    });
                });

                const animatedElements = document.querySelectorAll('.app-card, .app-image');
                animatedElements.forEach(el => observer.observe(el));
            }
        }

        // Error handling for image loading
        document.querySelector('.app-image')?.addEventListener('error', function() {
            this.style.display = 'none';
            console.error('Failed to load app image');
        });

        // Keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const modal = document.getElementById('cookie-modal');
                if (modal.classList.contains('show')) {
                    hideCookieModal();
                }
            }
        });

        // Performance monitoring
        window.addEventListener('load', function() {
            hideLoading();
            
            // Log performance metrics if cookies accepted
            if (cookiesAccepted && 'performance' in window) {
                const perfData = performance.timing;
                const loadTime = perfData.loadEventEnd - perfData.navigationStart;
                
                if (typeof gtag !== 'undefined' && loadTime > 0) {
                    gtag('event', 'timing_complete', {
                        name: 'page_load',
                        value: Math.round(loadTime)
                    });
                }
            }
        });

        // Service Worker registration for PWA features
        if ('serviceWorker' in navigator && cookiesAccepted) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('SW registered: ', registration);
                    })
                    .catch(registrationError => {
                        console.log('SW registration failed: ', registrationError);
                    });
            });
        }
    </script>
</body>
</html>
