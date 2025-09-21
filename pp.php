<?php
// Comprehensive Multilingual App Installation Guide
// Language detection and translations for all major world languages

$lang = $_GET['lang'] ?? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en', 0, 2);

$translations = [
    // English
    'en' => [
        'title' => 'If the app fails to install, follow these steps',
        'heading' => 'If the app fails to install, follow these steps',
        'step1' => 'Open the Google Play Store app on your Android device.',
        'step2' => 'Tap your profile icon, located in the upper right corner.',
        'step3' => 'Tap on Play Protect.',
        'step4' => 'Tap the gear icon to open the settings menu (located in the upper right corner).',
        'step5' => 'Tap the slider button corresponding to "Scan apps with Play Protect."',
        'step6' => 'In the pop-up menu, select Disable.',
        'step7' => 'Confirm the action with your fingerprint or security PIN.',
        'store_link' => 'Open the Google Play Store app.',
        'highlight' => 'If the above instructions are not clear, follow the steps in the image below.',
        'download_text' => 'Download and install the app now.',
        'select_language' => 'Select Language:'
    ],
    
    // Sinhala
    'si' => [
        'title' => 'ඇප් එක ස්ථාපනය කිරීමට අසමත් වුවහොත්, මෙම පියවර අනුගමනය කරන්න',
        'heading' => 'ඇප් එක ස්ථාපනය කිරීමට අසමත් වුවහොත්, මෙම පියවර අනුගමනය කරන්න',
        'step1' => 'ඔබේ Android උපකරණයේ Google Play Store ඇප් එක විවෘත කරන්න.',
        'step2' => 'ඉහළ දකුණු කෙළවරේ පිහිටි ඔබේ profile icon එක ස්පර්ශ කරන්න.',
        'step3' => 'Play Protect මත ස්පර්ශ කරන්න.',
        'step4' => 'සැකසීම් මෙනුව විවෘත කිරීම සඳහා gear icon එක ස්පර්ශ කරන්න (ඉහළ දකුණු කෙළවරේ).',
        'step5' => '"Play Protect සමඟ ඇප් ස්කෑන් කරන්න" වලට අදාළ slider button ස්පර්ශ කරන්න.',
        'step6' => 'Pop-up මෙනුවේ, අක්‍රිය කරන්න (Disable) තෝරන්න.',
        'step7' => 'ඔබේ ඇඟිලි සටහන හෝ ආරක්ෂක PIN සමඟ ක්‍රියාව තහවුරු කරන්න.',
        'store_link' => 'Google Play Store ඇප් එක විවෘත කරන්න.',
        'highlight' => 'ඉහත උපදෙස් පැහැදිලි නොවේ නම්, පහත රූපයේ පියවර අනුගමනය කරන්න.',
        'download_text' => 'දැන් ඇප් එක download කර install කරන්න.',
        'select_language' => 'භාෂාව තෝරන්න:'
    ],
    
    // Hindi
    'hi' => [
        'title' => 'यदि ऐप इंस्टॉल करने में विफल रहता है, तो इन चरणों का पालन करें',
        'heading' => 'यदि ऐप इंस्टॉल करने में विफल रहता है, तो इन चरणों का पालन करें',
        'step1' => 'अपने एंड्रॉइड डिवाइस पर Google Play Store ऐप खोलें।',
        'step2' => 'ऊपरी दाएं कोने में स्थित अपने प्रोफाइल आइकन पर टैप करें।',
        'step3' => 'Play Protect पर टैप करें।',
        'step4' => 'सेटिंग्स मेनू खोलने के लिए गियर आइकन पर टैप करें (ऊपरी दाएं कोने में स्थित)।',
        'step5' => '"Scan apps with Play Protect" से संबंधित स्लाइडर बटन पर टैप करें।',
        'step6' => 'पॉप-अप मेनू में, Disable का चयन करें।',
        'step7' => 'अपने फिंगरप्रिंट या सिक्योरिटी पिन के साथ कार्रवाई की पुष्टि करें।',
        'store_link' => 'Google Play Store ऐप खोलें।',
        'highlight' => 'यदि उपरोक्त निर्देश स्पष्ट नहीं हैं, तो नीचे दी गई छवि में चरणों का पालन करें।',
        'download_text' => 'अब ऐप डाउनलोड और इंस्टॉल करें।',
        'select_language' => 'भाषा चुनें:'
    ],
    
    // Chinese (Simplified)
    'zh' => [
        'title' => '如果应用程序无法安装，请按照以下步骤操作',
        'heading' => '如果应用程序无法安装，请按照以下步骤操作',
        'step1' => '在您的安卓设备上打开 Google Play Store 应用程序。',
        'step2' => '点击右上角的个人资料图标。',
        'step3' => '点击 Play Protect。',
        'step4' => '点击齿轮图标以打开设置菜单（位于右上角）。',
        'step5' => '点击与"Scan apps with Play Protect"对应的滑块按钮。',
        'step6' => '在弹出菜单中，选择 Disable。',
        'step7' => '使用您的指纹或安全密码确认操作。',
        'store_link' => '打开 Google Play Store 应用程序。',
        'highlight' => '如果上述说明不清晰，请按照下方图片中的步骤操作。',
        'download_text' => '现在下载并安装应用程序。',
        'select_language' => '选择语言:'
    ],
    
    // Spanish
    'es' => [
        'title' => 'Si la aplicación no se instala, sigue estos pasos',
        'heading' => 'Si la aplicación no se instala, sigue estos pasos',
        'step1' => 'Abre la aplicación Google Play Store en tu dispositivo Android.',
        'step2' => 'Toca el ícono de tu perfil, ubicado en la esquina superior derecha.',
        'step3' => 'Toca en Play Protect.',
        'step4' => 'Toca el ícono de engranaje para abrir el menú de configuración (ubicado en la esquina superior derecha).',
        'step5' => 'Toca el botón deslizante correspondiente a "Scan apps with Play Protect".',
        'step6' => 'En el menú emergente, selecciona Desactivar.',
        'step7' => 'Confirma la acción con tu huella digital o PIN de seguridad.',
        'store_link' => 'Abre la aplicación Google Play Store.',
        'highlight' => 'Si las instrucciones anteriores no están claras, sigue los pasos en la imagen a continuación.',
        'download_text' => 'Descarga e instala la aplicación ahora.',
        'select_language' => 'Seleccionar Idioma:'
    ],
    
    // Arabic
    'ar' => [
        'title' => 'إذا فشل تثبيت التطبيق، اتبع هذه الخطوات',
        'heading' => 'إذا فشل تثبيت التطبيق، اتبع هذه الخطوات',
        'step1' => 'افتح تطبيق Google Play Store على جهازك الأندرويد.',
        'step2' => 'اضغط على أيقونة ملفك الشخصي، الموجودة في الزاوية العلوية اليمنى.',
        'step3' => 'اضغط على Play Protect.',
        'step4' => 'اضغط على أيقونة الترس لفتح قائمة الإعدادات (الموجودة في الزاوية العلوية اليمنى).',
        'step5' => 'اضغط على زر التمرير الخاص بـ "Scan apps with Play Protect".',
        'step6' => 'في القائمة المنبثقة، اختر Disable.',
        'step7' => 'قم بتأكيد الإجراء باستخدام بصمة إصبعك أو رمز الحماية.',
        'store_link' => 'افتح تطبيق Google Play Store.',
        'highlight' => 'إذا لم تكن التعليمات أعلاه واضحة، اتبع الخطوات في الصورة أدناه.',
        'download_text' => 'قم بتحميل التطبيق وتثبيته الآن.',
        'select_language' => 'اختر اللغة:'
    ],
    
    // Portuguese
    'pt' => [
        'title' => 'Se o aplicativo não for instalado, siga estas etapas',
        'heading' => 'Se o aplicativo não for instalado, siga estas etapas',
        'step1' => 'Abra o aplicativo Google Play Store no seu dispositivo Android.',
        'step2' => 'Toque no ícone do seu perfil, localizado no canto superior direito.',
        'step3' => 'Toque em Play Protect.',
        'step4' => 'Toque no ícone de engrenagem para abrir o menu de configurações (localizado no canto superior direito).',
        'step5' => 'Toque no botão deslizante correspondente a "Scan apps with Play Protect".',
        'step6' => 'No menu pop-up, selecione Desativar.',
        'step7' => 'Confirme a ação com sua impressão digital ou PIN de segurança.',
        'store_link' => 'Abra o aplicativo Google Play Store.',
        'highlight' => 'Se as instruções acima não estiverem claras, siga as etapas na imagem abaixo.',
        'download_text' => 'Baixe e instale o aplicativo agora.',
        'select_language' => 'Selecionar Idioma:'
    ],
    
    // Russian
    'ru' => [
        'title' => 'Если приложение не устанавливается, выполните следующие шаги',
        'heading' => 'Если приложение не устанавливается, выполните следующие шаги',
        'step1' => 'Откройте приложение Google Play Store на вашем устройстве Android.',
        'step2' => 'Нажмите на значок профиля в правом верхнем углу.',
        'step3' => 'Нажмите на Play Protect.',
        'step4' => 'Нажмите на значок шестеренки, чтобы открыть меню настроек (в правом верхнем углу).',
        'step5' => 'Нажмите на ползунок, соответствующий «Сканировать приложения с помощью Play Protect».',
        'step6' => 'В всплывающем меню выберите Отключить.',
        'step7' => 'Подтвердите действие отпечатком пальца или PIN-кодом безопасности.',
        'store_link' => 'Откройте приложение Google Play Store.',
        'highlight' => 'Если приведенные выше инструкции не ясны, следуйте шагам на изображении ниже.',
        'download_text' => 'Скачайте и установите приложение сейчас.',
        'select_language' => 'Выберите язык:'
    ],
    
    // Japanese
    'ja' => [
        'title' => 'アプリがインストールできない場合、以下の手順に従ってください',
        'heading' => 'アプリがインストールできない場合、以下の手順に従ってください',
        'step1' => 'AndroidデバイスでGoogle Playストアアプリを開きます。',
        'step2' => '右上隅にあるプロフィールアイコンをタップします。',
        'step3' => 'Play Protectをタップします。',
        'step4' => '設定メニューを開くためにギアアイコンをタップします（右上隅にあります）。',
        'step5' => '「Play Protectでアプリをスキャンする」に対応するスライダーボタンをタップします。',
        'step6' => 'ポップアップメニューで「無効化」を選択します。',
        'step7' => '指紋またはセキュリティピンでアクションを確認します。',
        'store_link' => 'Google Playストアアプリを開きます。',
        'highlight' => '上記の手順が不明確な場合、以下の画像の手順に従ってください。',
        'download_text' => '今すぐアプリをダウンロードしてインストールしてください。',
        'select_language' => '言語を選択:'
    ],
    
    // Korean
    'ko' => [
        'title' => '앱 설치에 실패한 경우, 다음 단계를 따르세요',
        'heading' => '앱 설치에 실패한 경우, 다음 단계를 따르세요',
        'step1' => '안드로이드 기기에서 Google Play Store 앱을 엽니다.',
        'step2' => '오른쪽 상단에 있는 프로필 아이콘을 탭하세요.',
        'step3' => 'Play Protect를 탭하세요.',
        'step4' => '설정 메뉴를 열려면 톱니바퀴 아이콘을 탭하세요 (오른쪽 상단에 있습니다).',
        'step5' => '"Play Protect로 앱 스캔"에 해당하는 슬라이더 버튼을 탭하세요.',
        'step6' => '팝업 메뉴에서 비활성화를 선택하세요.',
        'step7' => '지문 또는 보안 PIN으로 작업을 확인하세요.',
        'store_link' => 'Google Play Store 앱을 엽니다.',
        'highlight' => '위의 지침이 명확하지 않은 경우, 아래 이미지의 단계를 따르세요.',
        'download_text' => '지금 앱을 다운로드하고 설치하세요.',
        'select_language' => '언어 선택:'
    ],
    
    // French
    'fr' => [
        'title' => 'Si l\'application ne s\'installe pas, suivez ces étapes',
        'heading' => 'Si l\'application ne s\'installe pas, suivez ces étapes',
        'step1' => 'Ouvrez l\'application Google Play Store sur votre appareil Android.',
        'step2' => 'Appuyez sur l\'icône de votre profil, située dans le coin supérieur droit.',
        'step3' => 'Appuyez sur Play Protect.',
        'step4' => 'Appuyez sur l\'icône d\'engrenage pour ouvrir le menu des paramètres (situé dans le coin supérieur droit).',
        'step5' => 'Appuyez sur le bouton coulissant correspondant à "Scan apps with Play Protect".',
        'step6' => 'Dans le menu contextuel, sélectionnez Désactiver.',
        'step7' => 'Confirmez l\'action avec votre empreinte digitale ou votre code PIN de sécurité.',
        'store_link' => 'Ouvrez l\'application Google Play Store.',
        'highlight' => 'Si les instructions ci-dessus ne sont pas claires, suivez les étapes dans l\'image ci-dessous.',
        'download_text' => 'Téléchargez et installez l\'application maintenant.',
        'select_language' => 'Sélectionner la Langue:'
    ],
    
    // German
    'de' => [
        'title' => 'Falls die App nicht installiert wird, folgen Sie diesen Schritten',
        'heading' => 'Falls die App nicht installiert wird, folgen Sie diesen Schritten',
        'step1' => 'Öffnen Sie die Google Play Store-App auf Ihrem Android-Gerät.',
        'step2' => 'Tippen Sie auf das Profilsymbol in der oberen rechten Ecke.',
        'step3' => 'Tippen Sie auf Play Protect.',
        'step4' => 'Tippen Sie auf das Zahnradsymbol, um das Einstellungsmenü zu öffnen (in der oberen rechten Ecke).',
        'step5' => 'Tippen Sie auf den Schieberegler für „Apps mit Play Protect scannen".',
        'step6' => 'Wählen Sie im Pop-up-Menü Deaktivieren.',
        'step7' => 'Bestätigen Sie die Aktion mit Ihrem Fingerabdruck oder Sicherheits-PIN.',
        'store_link' => 'Öffnen Sie die Google Play Store-App.',
        'highlight' => 'Falls die obigen Anweisungen nicht klar sind, folgen Sie den Schritten im Bild unten.',
        'download_text' => 'Laden Sie die App jetzt herunter und installieren Sie sie.',
        'select_language' => 'Sprache auswählen:'
    ],
    
    // Italian
    'it' => [
        'title' => 'Se l\'app non si installa, segui questi passaggi',
        'heading' => 'Se l\'app non si installa, segui questi passaggi',
        'step1' => 'Apri l\'app Google Play Store sul tuo dispositivo Android.',
        'step2' => 'Tocca l\'icona del tuo profilo, situata nell\'angolo in alto a destra.',
        'step3' => 'Tocca Play Protect.',
        'step4' => 'Tocca l\'icona dell\'ingranaggio per aprire il menu delle impostazioni (situata nell\'angolo in alto a destra).',
        'step5' => 'Tocca il pulsante scorrevole corrispondente a "Scansiona app con Play Protect".',
        'step6' => 'Nel menu a comparsa, seleziona Disattiva.',
        'step7' => 'Conferma l\'azione con la tua impronta digitale o PIN di sicurezza.',
        'store_link' => 'Apri l\'app Google Play Store.',
        'highlight' => 'Se le istruzioni sopra non sono chiare, segui i passaggi nell\'immagine qui sotto.',
        'download_text' => 'Scarica e installa l\'app ora.',
        'select_language' => 'Seleziona Lingua:'
    ],
    
    // Bengali
    'bn' => [
        'title' => 'অ্যাপটি ইনস্টল করতে ব্যর্থ হলে, এই ধাপগুলি অনুসরণ করুন',
        'heading' => 'অ্যাপটি ইনস্টল করতে ব্যর্থ হলে, এই ধাপগুলি অনুসরণ করুন',
        'step1' => 'আপনার Android ডিভাইসে Google Play Store অ্যাপটি খুলুন।',
        'step2' => 'উপরের ডানদিকে অবস্থিত আপনার প্রোফাইল আইকনে ট্যাপ করুন।',
        'step3' => 'Play Protect-এ ট্যাপ করুন।',
        'step4' => 'সেটিংস মেনু খুলতে গিয়ার আইকনে ট্যাপ করুন (উপরের ডানদিকে অবস্থিত)।',
        'step5' => '"Play Protect দিয়ে অ্যাপ স্ক্যান করুন" সংশ্লিষ্ট স্লাইডার বোতামে ট্যাপ করুন।',
        'step6' => 'পপ-আপ মেনুতে, নিষ্ক্রিয় নির্বাচন করুন।',
        'step7' => 'আপনার আঙুলের ছাপ বা নিরাপত্তা পিন দিয়ে কর্মটি নিশ্চিত করুন।',
        'store_link' => 'Google Play Store অ্যাপটি খুলুন।',
        'highlight' => 'উপরের নির্দেশাবলী স্পষ্ট না হলে, নিচের চিত্রের ধাপগুলি অনুসরণ করুন।',
        'download_text' => 'এখনই অ্যাপটি ডাউনলোড এবং ইনস্টল করুন।',
        'select_language' => 'ভাষা নির্বাচন করুন:'
    ],
    
    // Indonesian
    'id' => [
        'title' => 'Jika aplikasi gagal dipasang, ikuti langkah-langkah ini',
        'heading' => 'Jika aplikasi gagal dipasang, ikuti langkah-langkah ini',
        'step1' => 'Buka aplikasi Google Play Store di perangkat Android Anda.',
        'step2' => 'Ketuk ikon profil Anda, yang terletak di sudut kanan atas.',
        'step3' => 'Ketuk Play Protect.',
        'step4' => 'Ketuk ikon roda gigi untuk membuka menu pengaturan (terletak di sudut kanan atas).',
        'step5' => 'Ketuk tombol slider yang sesuai dengan "Pindai aplikasi dengan Play Protect".',
        'step6' => 'Di menu pop-up, pilih Nonaktifkan.',
        'step7' => 'Konfirmasi tindakan dengan sidik jari atau PIN keamanan Anda.',
        'store_link' => 'Buka aplikasi Google Play Store.',
        'highlight' => 'Jika petunjuk di atas tidak jelas, ikuti langkah-langkah pada gambar di bawah ini.',
        'download_text' => 'Unduh dan pasang aplikasi sekarang.',
        'select_language' => 'Pilih Bahasa:'
    ],
    
    // Vietnamese
    'vi' => [
        'title' => 'Nếu ứng dụng không cài đặt được, hãy làm theo các bước sau',
        'heading' => 'Nếu ứng dụng không cài đặt được, hãy làm theo các bước sau',
        'step1' => 'Mở ứng dụng Google Play Store trên thiết bị Android của bạn.',
        'step2' => 'Nhấn vào biểu tượng hồ sơ của bạn, nằm ở góc trên bên phải.',
        'step3' => 'Nhấn vào Play Protect.',
        'step4' => 'Nhấn vào biểu tượng bánh răng để mở menu cài đặt (nằm ở góc trên bên phải).',
        'step5' => 'Nhấn vào nút trượt tương ứng với "Quét ứng dụng bằng Play Protect".',
        'step6' => 'Trong menu bật lên, chọn Tắt.',
        'step7' => 'Xác nhận hành động bằng dấu vân tay hoặc mã PIN bảo mật của bạn.',
        'store_link' => 'Mở ứng dụng Google Play Store.',
        'highlight' => 'Nếu các hướng dẫn trên không rõ ràng, hãy làm theo các bước trong hình dưới đây.',
        'download_text' => 'Tải xuống và cài đặt ứng dụng ngay bây giờ.',
        'select_language' => 'Chọn Ngôn Ngữ:'
    ],
    
    // Thai
    'th' => [
        'title' => 'หากแอปติดตั้งไม่ได้ ให้ทำตามขั้นตอนเหล่านี้',
        'heading' => 'หากแอปติดตั้งไม่ได้ ให้ทำตามขั้นตอนเหล่านี้',
        'step1' => 'เปิดแอป Google Play Store ในอุปกรณ์ Android ของคุณ',
        'step2' => 'แตะไอคอนโปรไฟล์ของคุณที่อยู่มุมบนขวา',
        'step3' => 'แตะ Play Protect',
        'step4' => 'แตะไอคอนเฟืองเพื่อเปิดเมนูการตั้งค่า (อยู่มุมบนขวา)',
        'step5' => 'แตะปุ่มสไลเดอร์ที่สอดคล้องกับ "สแกนแอปด้วย Play Protect"',
        'step6' => 'ในเมนูป๊อปอัป ให้เลือกปิดใช้งาน',
        'step7' => 'ยืนยันการดำเนินการด้วยลายนิ้วมือหรือ PIN ความปลอดภัยของคุณ',
        'store_link' => 'เปิดแอป Google Play Store',
        'highlight' => 'หากคำแนะนำข้างต้นไม่ชัดเจน ให้ทำตามขั้นตอนในรูปภาพด้านล่าง',
        'download_text' => 'ดาวน์โหลดและติดตั้งแอปตอนนี้',
        'select_language' => 'เลือกภาษา:'
    ],
    
    // Turkish
    'tr' => [
        'title' => 'Uygulama yüklenemezse, bu adımları izleyin',
        'heading' => 'Uygulama yüklenemezse, bu adımları izleyin',
        'step1' => 'Android cihazınızda Google Play Store uygulamasını açın.',
        'step2' => 'Sağ üst köşede bulunan profil simgenize dokunun.',
        'step3' => 'Play Protect\'e dokunun.',
        'step4' => 'Ayarlar menüsünü açmak için dişli simgesine dokunun (sağ üst köşede bulunur).',
        'step5' => '"Play Protect ile uygulamaları tara" seçeneğine karşılık gelen kaydırıcı düğmesine dokunun.',
        'step6' => 'Açılır menüde Devre Dışı Bırak\'ı seçin.',
        'step7' => 'İşlemi parmak iziniz veya güvenlik PIN\'iniz ile onaylayın.',
        'store_link' => 'Google Play Store uygulamasını açın.',
        'highlight' => 'Yukarıdaki talimatlar net değilse, aşağıdaki resimdeki adımları izleyin.',
        'download_text' => 'Şimdi uygulamayı indirin ve yükleyin.',
        'select_language' => 'Dil Seçin:'
    ],
    
    // Dutch
    'nl' => [
        'title' => 'Als de app niet kan worden geïnstalleerd, volg deze stappen',
        'heading' => 'Als de app niet kan worden geïnstalleerd, volg deze stappen',
        'step1' => 'Open de Google Play Store-app op uw Android-apparaat.',
        'step2' => 'Tik op uw profielpictogram in de rechterbovenhoek.',
        'step3' => 'Tik op Play Protect.',
        'step4' => 'Tik op het tandwielpictogram om het instellingenmenu te openen (rechtsboven).',
        'step5' => 'Tik op de schuifknop voor "Apps scannen met Play Protect".',
        'step6' => 'Selecteer Uitschakelen in het pop-upmenu.',
        'step7' => 'Bevestig de actie met uw vingerafdruk of beveiligings-PIN.',
        'store_link' => 'Open de Google Play Store-app.',
        'highlight' => 'Als de bovenstaande instructies niet duidelijk zijn, volg dan de stappen in de afbeelding hieronder.',
        'download_text' => 'Download en installeer de app nu.',
        'select_language' => 'Selecteer Taal:'
    ],
    
    // Urdu
    'ur' => [
        'title' => 'اگر ایپ انسٹال نہیں ہو رہی تو یہ اقدامات کریں',
        'heading' => 'اگر ایپ انسٹال نہیں ہو رہی تو یہ اقدامات کریں',
        'step1' => 'اپنے Android ڈیوائس پر Google Play Store ایپ کھولیں۔',
        'step2' => 'اوپری دائیں کونے میں موجود اپنے پروفائل آئیکن پر ٹیپ کریں۔',
        'step3' => 'Play Protect پر ٹیپ کریں۔',
        'step4' => 'سیٹنگز مینو کھولنے کے لیے گیئر آئیکن پر ٹیپ کریں (اوپری دائیں کونے میں)۔',
        'step5' => '"Play Protect کے ساتھ ایپس اسکین کریں" سے متعلقہ سلائیڈر بٹن پر ٹیپ کریں۔',
        'step6' => 'پاپ اپ مینو میں، غیر فعال کا انتخاب کریں۔',
        'step7' => 'اپنے فنگر پرنٹ یا سیکیورٹی پن سے عمل کی تصدیق کریں۔',
        'store_link' => 'Google Play Store ایپ کھولیں۔',
        'highlight' => 'اگر اوپر کی ہدایات واضح نہیں ہیں تو نیچے دی گئی تصویر میں اقدامات کی پیروی کریں۔',
        'download_text' => 'ابھی ایپ ڈاؤن لوڈ اور انسٹال کریں۔',
        'select_language' => 'زبان منتخب کریں:'
    ],
    
    // Tamil
    'ta' => [
        'title' => 'ஆப் நிறுவ முடியவில்லை என்றால், இந்த படிகளைப் பின்பற்றவும்',
        'heading' => 'ஆப் நிறுவ முடியவில்லை என்றால், இந்த படிகளைப் பின்பற்றவும்',
        'step1' => 'உங்கள் Android சாதனத்தில் Google Play Store ஆப்பை திறக்கவும்.',
        'step2' => 'மேல் வலது மூலையில் உள்ள உங்கள் சுயவிவர ஐகானைத் தட்டவும்.',
        'step3' => 'Play Protect ஐ தட்டவும்.',
        'step4' => 'அமைப்புகள் மெனுவை திறக்க கியர் ஐகானைத் தட்டவும் (மேல் வலது மூலையில் உள்ளது).',
        'step5' => '"Play Protect உடன் ஆப்களை ஸ்கேன் செய்யவும்" உடன் தொடர்புடைய ஸ்லைடர் பட்டனைத் தட்டவும்.',
        'step6' => 'பாப்-அப் மெனுவில், முடக்கு என்பதை தேர்ந்தெடுக்கவும்.',
        'step7' => 'உங்கள் கைரேகை அல்லது பாதுகாப்பு பின் மூலம் செயலை உறுதிப்படுத்தவும்.',
        'store_link' => 'Google Play Store ஆப்பை திறக்கவும்.',
        'highlight' => 'மேலே உள்ள வழிமுறைகள் தெளிவாக இல்லை என்றால், கீழே உள்ள படத்தில் உள்ள படிகளைப் பின்பற்றவும்.',
        'download_text' => 'இப்போது ஆப்பை பதிவிறக்கம் செய்து நிறுவுங்கள்.',
        'select_language' => 'மொழியைத் தேர்ந்தெடுக்கவும்:'
    ],
    
    // Telugu
    'te' => [
        'title' => 'యాప్ ఇన్‌స్టాల్ కాకపోతే, ఈ దశలను అనుసరించండి',
        'heading' => 'యాప్ ఇన్‌స్టాల్ కాకపోతే, ఈ దశలను అనుసరించండి',
        'step1' => 'మీ Android పరికరంలో Google Play Store యాప్‌ను తెరవండి.',
        'step2' => 'ఎగువ కుడి మూలన ఉన్న మీ ప్రొఫైల్ చిహ్నంపై ట్యాప్ చేయండి.',
        'step3' => 'Play Protect పై ట్యాప్ చేయండి.',
        'step4' => 'సెట్టింగ్స్ మెనుని తెరవడానికి గేర్ చిహ్నంపై ట్యాప్ చేయండి (ఎగువ కుడి మూలన ఉంది).',
        'step5' => '"Play Protect తో యాప్‌లను స్కాన్ చేయండి"కు సంబంధించిన స్లైడర్ బటన్‌పై ట్యాప్ చేయండి.',
        'step6' => 'పాప్-అప్ మెనులో, డిసేబుల్‌ను ఎంచుకోండి.',
        'step7' => 'మీ వేలిముద్ర లేదా సెక్యూరిటీ పిన్‌తో చర్యను నిర్ధారించండి.',
        'store_link' => 'Google Play Store యాప్‌ను తెరవండి.',
        'highlight' => 'పైన ఉన్న సూచనలు స్పష్టంగా లేకపోతే, దిగువ చిత్రంలోని దశలను అనుసరించండి.',
        'download_text' => 'ఇప్పుడు యాప్‌ను డౌన్‌లోడ్ చేసి ఇన్‌స్టాల్ చేయండి.',
        'select_language' => 'భాషను ఎంచుకోండి:'
    ],
    
    // Gujarati
    'gu' => [
        'title' => 'જો એપ્લિકેશન ઇન્સ્ટોલ થવામાં નિષ્ફળ જાય, તો આ પગલાંઓ અનુસરો',
        'heading' => 'જો એપ્લિકેશન ઇન્સ્ટોલ થવામાં નિષ્ફળ જાય, તો આ પગલાંઓ અનુસરો',
        'step1' => 'તમારા Android ઉપકરણ પર Google Play Store એપ્લિકેશન ખોલો.',
        'step2' => 'ઉપર જમણા ખૂણામાં સ્થિત તમારા પ્રોફાઇલ આઇકન પર ટેપ કરો.',
        'step3' => 'Play Protect પર ટેપ કરો.',
        'step4' => 'સેટિંગ્સ મેનુ ખોલવા માટે ગિયર આઇકન પર ટેપ કરો (ઉપર જમણા ખૂણામાં સ્થિત છે).',
        'step5' => '"Play Protect સાથે એપ્લિકેશન્સ સ્કેન કરો"ને અનુરૂપ સ્લાઇડર બટન પર ટેપ કરો.',
        'step6' => 'પોપ-અપ મેનુમાં, અક્ષમ કરો પસંદ કરો.',
        'step7' => 'તમારા ફિંગરપ્રિંટ અથવા સુરક્ષા પિન સાથે ક્રિયાની પુષ્ટિ કરો.',
        'store_link' => 'Google Play Store એપ્લિકેશન ખોલો.',
        'highlight' => 'જો ઉપરોક્ત સૂચનાઓ સ્પષ્ટ નથી, તો નીચેની છબીમાં પગલાંઓ અનુસરો.',
        'download_text' => 'હવે એપ્લિકેશન ડાઉનલોડ અને ઇન્સ્ટોલ કરો.',
        'select_language' => 'ભાષા પસંદ કરો:'
    ],
    
    // Marathi
    'mr' => [
        'title' => 'अॅप इन्स्टॉल होत नसल्यास, या पायऱ्यांचे पालन करा',
        'heading' => 'अॅप इन्स्टॉल होत नसल्यास, या पायऱ्यांचे पालन करा',
        'step1' => 'आपल्या Android उपकरणावर Google Play Store अॅप उघडा.',
        'step2' => 'वरच्या उजव्या कोपऱ्यात असलेल्या आपल्या प्रोफाइल चिन्हावर टॅप करा.',
        'step3' => 'Play Protect वर टॅप करा.',
        'step4' => 'सेटिंग्ज मेनू उघडण्यासाठी गिअर चिन्हावर टॅप करा (वरच्या उजव्या कोपऱ्यात स्थित).',
        'step5' => '"Play Protect सह अॅप्स स्कॅन करा" शी संबंधित स्लायडर बटणावर टॅप करा.',
        'step6' => 'पॉप-अप मेनूमध्ये, अक्षम करा निवडा.',
        'step7' => 'आपल्या फिंगरप्रिंट किंवा सुरक्षा पिनसह कृती पुष्टी करा.',
        'store_link' => 'Google Play Store अॅप उघडा.',
        'highlight' => 'वरील सूचना स्पष्ट नसल्यास, खालील चित्रातील पायऱ्यांचे पालन करा.',
        'download_text' => 'आता अॅप डाउनलोड आणि इन्स्टॉल करा.',
        'select_language' => 'भाषा निवडा:'
    ],
    
    // Kannada
    'kn' => [
        'title' => 'ಅಪ್ಲಿಕೇಶನ್ ಇನ್‌ಸ್ಟಾಲ್ ಮಾಡಲು ವಿಫಲವಾದರೆ, ಈ ಹಂತಗಳನ್ನು ಅನುಸರಿಸಿ',
        'heading' => 'ಅಪ್ಲಿಕೇಶನ್ ಇನ್‌ಸ್ಟಾಲ್ ಮಾಡಲು ವಿಫಲವಾದರೆ, ಈ ಹಂತಗಳನ್ನು ಅನುಸರಿಸಿ',
        'step1' => 'ನಿಮ್ಮ Android ಸಾಧನದಲ್ಲಿ Google Play Store ಅಪ್ಲಿಕೇಶನ್ ತೆರೆಯಿರಿ.',
        'step2' => 'ಮೇಲಿನ ಬಲ ಮೂಲೆಯಲ್ಲಿ ಇರುವ ನಿಮ್ಮ ಪ್ರೊಫೈಲ್ ಐಕಾನ್ ಮೇಲೆ ಟ್ಯಾಪ್ ಮಾಡಿ.',
        'step3' => 'Play Protect ಮೇಲೆ ಟ್ಯಾಪ್ ಮಾಡಿ.',
        'step4' => 'ಸೆಟ್ಟಿಂಗ್‌ಗಳ ಮೆನುವನ್ನು ತೆರೆಯಲು ಗಿಯರ್ ಐಕಾನ್ ಮೇಲೆ ಟ್ಯಾಪ್ ಮಾಡಿ (ಮೇಲಿನ ಬಲ ಮೂಲೆಯಲ್ಲಿದೆ).',
        'step5' => '"Play Protect ಜೊತೆ ಅಪ್ಲಿಕೇಶನ್‌ಗಳನ್ನು ಸ್ಕ್ಯಾನ್ ಮಾಡಿ" ಗೆ ಸಂಬಂಧಿಸಿದ ಸ್ಲೈಡರ್ ಬಟನ್ ಮೇಲೆ ಟ್ಯಾಪ್ ಮಾಡಿ.',
        'step6' => 'ಪಾಪ್-ಅಪ್ ಮೆನುವಿನಲ್ಲಿ, ನಿಷ್ಕ್ರಿಯಗೊಳಿಸು ಆಯ್ಕೆಮಾಡಿ.',
        'step7' => 'ನಿಮ್ಮ ಫಿಂಗರ್‌ಪ್ರಿಂಟ್ ಅಥವಾ ಸುರಕ್ಷತಾ ಪಿನ್‌ನೊಂದಿಗೆ ಕ್ರಿಯೆಯನ್ನು ದೃಢೀಕರಿಸಿ.',
        'store_link' => 'Google Play Store ಅಪ್ಲಿಕೇಶನ್ ತೆರೆಯಿರಿ.',
        'highlight' => 'ಮೇಲಿನ ಸೂಚನೆಗಳು ಸ್ಪಷ್ಟವಾಗಿಲ್ಲದಿದ್ದರೆ, ಕೆಳಗಿನ ಚಿತ್ರದಲ್ಲಿನ ಹಂತಗಳನ್ನು ಅನುಸರಿಸಿ.',
        'download_text' => 'ಈಗ ಅಪ್ಲಿಕೇಶನ್ ಡೌನ್‌ಲೋಡ್ ಮಾಡಿ ಮತ್ತು ಇನ್‌ಸ್ಟಾಲ್ ಮಾಡಿ.',
        'select_language' => 'ಭಾಷೆಯನ್ನು ಆಯ್ಕೆಮಾಡಿ:'
    ],
    
    // Malayalam
    'ml' => [
        'title' => 'ആപ്പ് ഇൻസ്റ്റാൾ ചെയ്യാൻ പരാജയപ്പെട്ടാൽ, ഈ ഘട്ടങ്ങൾ പാലിക്കുക',
        'heading' => 'ആപ്പ് ഇൻസ്റ്റാൾ ചെയ്യാൻ പരാജയപ്പെട്ടാൽ, ഈ ഘട്റങ്ങൾ പാലിക്കുക',
        'step1' => 'നിങ്ങളുടെ Android ഉപകരണത്തിൽ Google Play Store ആപ്പ് തുറക്കുക.',
        'step2' => 'മുകളിൽ വലത് കോണിൽ സ്ഥിതി ചെയ്യുന്ന നിങ്ങളുടെ പ്രൊഫൈൽ ഐക്കണിൽ ടാപ്പ് ചെയ്യുക.',
        'step3' => 'Play Protect-ൽ ടാപ്പ് ചെയ്യുക.',
        'step4' => 'സെറ്റിങ്സ് മെനു തുറക്കാൻ ഗിയർ ഐക്കണിൽ ടാപ്പ് ചെയ്യുക (മുകളിൽ വലത് കോണിൽ സ്ഥിതി ചെയ്യുന്നു).',
        'step5' => '"Play Protect ഉപയോഗിച്ച് ആപ്പുകൾ സ്കാൻ ചെയ്യുക" എന്നതിനോട് യോജിച്ച സ്ലൈഡർ ബട്ടണിൽ ടാപ്പ് ചെയ്യുക.',
        'step6' => 'പോപ്പ്-അപ്പ് മെനുവിൽ, പ്രവർത്തനരഹിതമാക്കുക തിരഞ്ഞെടുക്കുക.',
        'step7' => 'നിങ്ങളുടെ ഫിംഗർപ്രിന്റ് അല്ലെങ്കിൽ സുരക്ഷാ പിൻ ഉപയോഗിച്ച് പ്രവർത്തനം സ്ഥിരീകരിക്കുക.',
        'store_link' => 'Google Play Store ആപ്പ് തുറക്കുക.',
        'highlight' => 'മേൽപ്പറഞ്ഞ നിർദ്ദേശങ്ങൾ വ്യക്തമല്ലെങ്കിൽ, ചുവടെയുള്ള ചിത്രത്തിലെ ഘട്ടങ്ങൾ പാലിക്കുക.',
        'download_text' => 'ഇപ്പോൾ ആപ്പ് ഡൗൺലോഡ് ചെയ്ത് ഇൻസ്റ്റാൾ ചെയ്യുക.',
        'select_language' => 'ഭാഷ തിരഞ്ഞെടുക്കുക:'
    ],
    
    // Punjabi
    'pa' => [
        'title' => 'ਜੇ ਐਪ ਇੰਸਟਾਲ ਕਰਨ ਵਿੱਚ ਅਸਫਲ ਹੋਵੇ, ਤਾਂ ਇਹਨਾਂ ਕਦਮਾਂ ਦੀ ਪਾਲਣਾ ਕਰੋ',
        'heading' => 'ਜੇ ਐਪ ਇੰਸਟਾਲ ਕਰਨ ਵਿੱਚ ਅਸਫਲ ਹੋਵੇ, ਤਾਂ ਇਹਨਾਂ ਕਦਮਾਂ ਦੀ ਪਾਲਣਾ ਕਰੋ',
        'step1' => 'ਆਪਣੇ Android ਡਿਵਾਈਸ ਤੇ Google Play Store ਐਪ ਖੋਲ੍ਹੋ।',
        'step2' => 'ਉੱਪਰੀ ਸੱਜੇ ਕੋਨੇ ਵਿੱਚ ਸਥਿਤ ਆਪਣੇ ਪ੍ਰੋਫਾਈਲ ਆਈਕਨ ਤੇ ਟੈਪ ਕਰੋ।',
        'step3' => 'Play Protect ਤੇ ਟੈਪ ਕਰੋ।',
        'step4' => 'ਸੈਟਿੰਗਜ਼ ਮੀਨੂ ਖੋਲ੍ਹਣ ਲਈ ਗੀਅਰ ਆਈਕਨ ਤੇ ਟੈਪ ਕਰੋ (ਉੱਪਰੀ ਸੱਜੇ ਕੋਨੇ ਵਿੱਚ ਸਥਿਤ)।',
        'step5' => '"Play Protect ਨਾਲ ਐਪਸ ਸਕੈਨ ਕਰੋ" ਨਾਲ ਸੰਬੰਧਿਤ ਸਲਾਈਡਰ ਬਟਨ ਤੇ ਟੈਪ ਕਰੋ।',
        'step6' => 'ਪੌਪ-ਅੱਪ ਮੀਨੂ ਵਿੱਚ, ਅਸਮਰੱਥ ਕਰੋ ਚੁਣੋ।',
        'step7' => 'ਆਪਣੇ ਫਿੰਗਰਪ੍ਰਿੰਟ ਜਾਂ ਸੁਰੱਖਿਆ ਪਿੰਨ ਨਾਲ ਕਾਰਵਾਈ ਦੀ ਪੁਸ਼ਟੀ ਕਰੋ।',
        'store_link' => 'Google Play Store ਐਪ ਖੋਲ੍ਹੋ।',
        'highlight' => 'ਜੇ ਉਪਰੋਕਤ ਨਿਰਦੇਸ਼ ਸਪਸ਼ਟ ਨਹੀਂ ਹਨ, ਤਾਂ ਹੇਠਾਂ ਦਿੱਤੀ ਤਸਵੀਰ ਵਿੱਚ ਕਦਮਾਂ ਦੀ ਪਾਲਣਾ ਕਰੋ।',
        'download_text' => 'ਹੁਣ ਐਪ ਡਾਊਨਲੋਡ ਅਤੇ ਇੰਸਟਾਲ ਕਰੋ।',
        'select_language' => 'ਭਾਸ਼ਾ ਚੁਣੋ:'
    ],
    
    // Persian/Farsi
    'fa' => [
        'title' => 'اگر اپلیکیشن نصب نشد، این مراحل را دنبال کنید',
        'heading' => 'اگر اپلیکیشن نصب نشد، این مراحل را دنبال کنید',
        'step1' => 'اپلیکیشن Google Play Store را در دستگاه اندروید خود باز کنید.',
        'step2' => 'روی آیکون نمایه خود که در گوشه سمت راست بالا قرار دارد، ضربه بزنید.',
        'step3' => 'روی Play Protect ضربه بزنید.',
        'step4' => 'روی آیکون چرخ دنده برای باز کردن منوی تنظیمات ضربه بزنید (در گوشه سمت راست بالا قرار دارد).',
        'step5' => 'روی دکمه کشویی مربوط به "اسکن اپلیکیشن‌ها با Play Protect" ضربه بزنید.',
        'step6' => 'در منوی بازشو، غیرفعال را انتخاب کنید.',
        'step7' => 'عمل را با اثر انگشت یا پین امنیتی خود تأیید کنید.',
        'store_link' => 'اپلیکیشن Google Play Store را باز کنید.',
        'highlight' => 'اگر دستورالعمل‌های بالا واضح نیستند، مراحل موجود در تصویر زیر را دنبال کنید.',
        'download_text' => 'اکنون اپلیکیشن را دانلود و نصب کنید.',
        'select_language' => 'زبان را انتخاب کنید:'
    ],
    
    // Malay
    'ms' => [
        'title' => 'Jika aplikasi gagal dipasang, ikuti langkah-langkah ini',
        'heading' => 'Jika aplikasi gagal dipasang, ikuti langkah-langkah ini',
        'step1' => 'Buka aplikasi Google Play Store di peranti Android anda.',
        'step2' => 'Ketik ikon profil anda, yang terletak di sudut kanan atas.',
        'step3' => 'Ketik pada Play Protect.',
        'step4' => 'Ketik ikon gear untuk membuka menu tetapan (terletak di sudut kanan atas).',
        'step5' => 'Ketik butang slider yang berkaitan dengan "Imbas apl dengan Play Protect".',
        'step6' => 'Dalam menu pop-up, pilih Nyahdayakan.',
        'step7' => 'Sahkan tindakan dengan cap jari atau PIN keselamatan anda.',
        'store_link' => 'Buka aplikasi Google Play Store.',
        'highlight' => 'Jika arahan di atas tidak jelas, ikuti langkah dalam gambar di bawah.',
        'download_text' => 'Muat turun dan pasang aplikasi sekarang.',
        'select_language' => 'Pilih Bahasa:'
    ],
    
    // Swedish
    'sv' => [
        'title' => 'Om appen inte installeras, följ dessa steg',
        'heading' => 'Om appen inte installeras, följ dessa steg',
        'step1' => 'Öppna Google Play Store-appen på din Android-enhet.',
        'step2' => 'Tryck på din profilikon i det övre högra hörnet.',
        'step3' => 'Tryck på Play Protect.',
        'step4' => 'Tryck på kugghjulsikonen för att öppna inställningsmenyn (belägen i det övre högra hörnet).',
        'step5' => 'Tryck på skjutreglaget för "Skanna appar med Play Protect".',
        'step6' => 'Välj Inaktivera i popup-menyn.',
        'step7' => 'Bekräfta åtgärden med ditt fingeravtryck eller säkerhets-PIN.',
        'store_link' => 'Öppna Google Play Store-appen.',
        'highlight' => 'Om ovanstående instruktioner inte är tydliga, följ stegen i bilden nedan.',
        'download_text' => 'Ladda ner och installera appen nu.',
        'select_language' => 'Välj Språk:'
    ],
    
    // Norwegian
    'no' => [
        'title' => 'Hvis appen ikke installeres, følg disse trinnene',
        'heading' => 'Hvis appen ikke installeres, følg disse trinnene',
        'step1' => 'Åpne Google Play Store-appen på Android-enheten din.',
        'step2' => 'Trykk på profilikonet ditt i øvre høyre hjørne.',
        'step3' => 'Trykk på Play Protect.',
        'step4' => 'Trykk på tannhjulikonet for å åpne innstillingsmenyen (øvre høyre hjørne).',
        'step5' => 'Trykk på skyveknappen for "Skann apper med Play Protect".',
        'step6' => 'Velg Deaktiver i popup-menyen.',
        'step7' => 'Bekreft handlingen med fingeravtrykket eller sikkerhets-PIN.',
        'store_link' => 'Åpne Google Play Store-appen.',
        'highlight' => 'Hvis instruksjonene ovenfor ikke er klare, følg trinnene i bildet nedenfor.',
        'download_text' => 'Last ned og installer appen nå.',
        'select_language' => 'Velg Språk:'
    ],
    
    // Polish
    'pl' => [
        'title' => 'Jeśli aplikacja nie może zostać zainstalowana, wykonaj te kroki',
        'heading' => 'Jeśli aplikacja nie może zostać zainstalowana, wykonaj te kroki',
        'step1' => 'Otwórz aplikację Google Play Store na urządzeniu Android.',
        'step2' => 'Dotknij ikony profilu w prawym górnym rogu.',
        'step3' => 'Dotknij Play Protect.',
        'step4' => 'Dotknij ikony koła zębatego, aby otworzyć menu ustawień (w prawym górnym rogu).',
        'step5' => 'Dotknij przycisku suwaka dla "Skanuj aplikacje za pomocą Play Protect".',
        'step6' => 'W menu podręcznym wybierz Wyłącz.',
        'step7' => 'Potwierdź działanie odciskiem palca lub kodem PIN zabezpieczającym.',
        'store_link' => 'Otwórz aplikację Google Play Store.',
        'highlight' => 'Jeśli powyższe instrukcje nie są jasne, postępuj zgodnie z krokami na obrazku poniżej.',
        'download_text' => 'Pobierz i zainstaluj aplikację teraz.',
        'select_language' => 'Wybierz Język:'
    ],
    
    // Hebrew
    'he' => [
        'title' => 'אם האפליקציה נכשלת בהתקנה, בצע את הצעדים הבאים',
        'heading' => 'אם האפליקציה נכשלת בהתקנה, בצע את הצעדים הבאים',
        'step1' => 'פתח את אפליקציית Google Play Store במכשיר האנדרואיד שלך.',
        'step2' => 'הקש על אייקון הפרופיל שלך, הממוקם בפינה הימנית העליונה.',
        'step3' => 'הקש על Play Protect.',
        'step4' => 'הקש על אייקון גלגל השיניים לפתיחת תפריט ההגדרות (ממוקם בפינה הימנית העליונה).',
        'step5' => 'הקש על כפתור המחוון הקשור ל"סריקת אפליקציות עם Play Protect".',
        'step6' => 'בתפריט הקופץ, בחר השבת.',
        'step7' => 'אשר את הפעולה עם טביעת האצבע או קוד האבטחה שלך.',
        'store_link' => 'פתח את אפליקציית Google Play Store.',
        'highlight' => 'אם ההוראות למעלה לא ברורות, בצע את הצעדים בתמונה למטה.',
        'download_text' => 'הורד והתקן את האפליקציה עכשיו.',
        'select_language' => 'בחר שפה:'
    ],
    
    // Greek
    'el' => [
        'title' => 'Εάν η εφαρμογή αποτύχει να εγκατασταθεί, ακολουθήστε αυτά τα βήματα',
        'heading' => 'Εάν η εφαρμογή αποτύχει να εγκατασταθεί, ακολουθήστε αυτά τα βήματα',
        'step1' => 'Ανοίξτε την εφαρμογή Google Play Store στη συσκευή Android σας.',
        'step2' => 'Πατήστε το εικονίδιο προφίλ σας, που βρίσκεται στην επάνω δεξιά γωνία.',
        'step3' => 'Πατήστε Play Protect.',
        'step4' => 'Πατήστε το εικονίδιο γραναζιού για να ανοίξετε το μενού ρυθμίσεων (στην επάνω δεξιά γωνία).',
        'step5' => 'Πατήστε το κουμπί ολίσθησης που αντιστοιχεί στο "Σάρωση εφαρμογών με Play Protect".',
        'step6' => 'Στο αναδυόμενο μενού, επιλέξτε Απενεργοποίηση.',
        'step7' => 'Επιβεβαιώστε την ενέργεια με το δακτυλικό αποτύπωμα ή το PIN ασφαλείας σας.',
        'store_link' => 'Ανοίξτε την εφαρμογή Google Play Store.',
        'highlight' => 'Εάν οι παραπάνω οδηγίες δεν είναι σαφείς, ακολουθήστε τα βήματα στην παρακάτω εικόνα.',
        'download_text' => 'Κάντε λήψη και εγκατάσταση της εφαρμογής τώρα.',
        'select_language' => 'Επιλέξτε Γλώσσα:'
    ],
    
    // Ukrainian
    'uk' => [
        'title' => 'Якщо програма не встановлюється, виконайте ці кроки',
        'heading' => 'Якщо програма не встановлюється, виконайте ці кроки',
        'step1' => 'Відкрийте програму Google Play Store на вашому Android пристрої.',
        'step2' => 'Натисніть на значок профілю у верхньому правому куті.',
        'step3' => 'Натисніть на Play Protect.',
        'step4' => 'Натисніть на значок шестерні щоб відкрити меню налаштувань (у верхньому правому куті).',
        'step5' => 'Натисніть на кнопку повзунка що відповідає "Сканувати програми за допомогою Play Protect".',
        'step6' => 'У спливаючому меню виберіть Вимкнути.',
        'step7' => 'Підтвердьте дію відбитком пальця або PIN-кодом безпеки.',
        'store_link' => 'Відкрийте програму Google Play Store.',
        'highlight' => 'Якщо наведені вище інструкції не зрозумілі, дотримуйтесь кроків на зображенні нижче.',
        'download_text' => 'Завантажте та встановіть програму зараз.',
        'select_language' => 'Виберіть мову:'
    ]
];

// Ensure language exists, fallback to English
$lang = isset($translations[$lang]) ? $lang : 'en';
$current_translation = $translations[$lang];

// Detect RTL languages
$rtl_languages = ['ar', 'he', 'fa', 'ur'];
$is_rtl = in_array($lang, $rtl_languages);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" <?php echo $is_rtl ? 'dir="rtl"' : ''; ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $current_translation['title']; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Noto+Sans+Arabic:wght@100..900&family=Noto+Sans+Bengali:wght@100..900&family=Noto+Sans+Devanagari:wght@100..900&family=Noto+Sans+Tamil:wght@100..900&family=Noto+Sans+Telugu:wght@100..900&family=Noto+Sans+Malayalam:wght@100..900&family=Noto+Sans+Gujarati:wght@100..900&family=Noto+Sans+Kannada:wght@100..900&family=Noto+Sans+Gurmukhi:wght@100..900&family=Noto+Sans+Thai:wght@100..900&family=Noto+Sans+SC:wght@100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a73e8;
            --secondary-color: #34a853;
            --accent-color: #fbbc04;
            --error-color: #ea4335;
            --surface-color: #ffffff;
            --background-color: #f8f9fa;
            --text-primary: #202124;
            --text-secondary: #5f6368;
            --border-color: #dadce0;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Noto Sans', 'Noto Sans Arabic', 'Noto Sans Bengali', 'Noto Sans Devanagari', 'Noto Sans Tamil', 'Noto Sans Telugu', 'Noto Sans Malayalam', 'Noto Sans Gujarati', 'Noto Sans Kannada', 'Noto Sans Gurmukhi', 'Noto Sans Thai', 'Noto Sans SC', 'Noto Sans JP', 'Noto Sans KR', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e8f0fe 100%);
            color: var(--text-primary);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
            background: var(--surface-color);
            border-radius: 16px;
            box-shadow: 0 8px 32px var(--shadow-color);
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }
        
        .container:hover {
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.15);
        }
        
        .header {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1557b0 100%);
            color: white;
            padding: 32px;
            text-align: center;
        }
        
        .header h1 {
            font-size: clamp(18px, 4vw, 28px);
            font-weight: 600;
            margin: 0;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            line-height: 1.3;
        }
        
        .content {
            padding: 32px;
        }
        
        .language-selector {
            margin-bottom: 32px;
            text-align: center;
        }
        
        .language-selector label {
            display: block;
            font-weight: 500;
            margin-bottom: 12px;
            color: var(--text-primary);
            font-size: 16px;
        }
        
        .language-selector select {
            width: 100%;
            max-width: 450px;
            padding: 14px 16px;
            font-size: 15px;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: var(--surface-color);
            color: var(--text-primary);
            cursor: pointer;
            font-family: inherit;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%235f6368" viewBox="0 0 16 16"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>');
            background-repeat: no-repeat;
            background-position: <?php echo $is_rtl ? 'left' : 'right'; ?> 12px center;
            padding-<?php echo $is_rtl ? 'left' : 'right'; ?>: 48px;
        }
        
        .language-selector select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
        }
        
        .steps {
            counter-reset: step-counter;
        }
        
        .step {
            counter-increment: step-counter;
            margin-bottom: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
            border-<?php echo $is_rtl ? 'right' : 'left'; ?>: 4px solid var(--primary-color);
            position: relative;
            transition: all 0.3s ease;
        }
        
        .step:hover {
            background: #e8f0fe;
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(26, 115, 232, 0.1);
        }
        
        .step::before {
            content: counter(step-counter);
            position: absolute;
            top: 20px;
            <?php echo $is_rtl ? 'right' : 'left'; ?>: -14px;
            width: 28px;
            height: 28px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 2px 8px rgba(26, 115, 232, 0.3);
        }
        
        .step-content {
            margin-<?php echo $is_rtl ? 'right' : 'left'; ?>: 20px;
            font-size: 16px;
            color: var(--text-primary);
            line-height: 1.5;
        }
        
        .step-content a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px solid transparent;
            transition: border-color 0.3s ease;
        }
        
        .step-content a:hover {
            border-bottom-color: var(--primary-color);
        }
        
        .store-link {
            text-align: center;
            margin: 32px 0;
            padding: 24px;
            background: linear-gradient(135deg, #e8f5e8 0%, #f0f8f0 100%);
            border-radius: 12px;
            border: 2px solid var(--secondary-color);
        }
        
        .store-link a {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            color: var(--secondary-color);
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .store-link a:hover {
            color: #137333;
            transform: scale(1.05);
        }
        
        .store-img {
            width: 24px;
            height: 24px;
            filter: hue-rotate(120deg);
        }
        
        .highlight {
            background: linear-gradient(135deg, #fff3cd 0%, #fef7e0 100%);
            border: 2px solid var(--accent-color);
            border-radius: 12px;
            padding: 20px;
            margin: 24px 0;
            text-align: center;
            font-weight: 500;
            color: #856404;
        }
        
        .app-img-container {
            position: relative;
            display: block;
            margin: 32px auto;
            text-align: center;
            max-width: 500px;
        }
        
        .app-img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        
        .app-img:hover {
            transform: scale(1.02);
        }
        
        .zoom-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 64px;
            height: 64px;
            background: rgba(26, 115, 232, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(4px);
        }
        
        .zoom-icon:hover {
            background: rgba(26, 115, 232, 1);
            transform: translate(-50%, -50%) scale(1.1);
        }
        
        .zoom-icon::before {
            content: '🔍';
            font-size: 24px;
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            backdrop-filter: blur(4px);
            animation: fadeIn 0.3s ease;
        }
        
        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .modal img {
            max-width: 95%;
            max-height: 95%;
            border-radius: 8px;
            box-shadow: 0 16px 48px rgba(0, 0, 0, 0.5);
            animation: zoomIn 0.3s ease;
        }
        
        .close-btn {
            position: absolute;
            top: 24px;
            <?php echo $is_rtl ? 'left' : 'right'; ?>: 24px;
            color: white;
            font-size: 32px;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        
        .close-btn:hover {
            background: rgba(0, 0, 0, 0.8);
            transform: scale(1.1);
        }
        
        .download-section {
            text-align: center;
            margin-top: 32px;
            padding: 24px;
            background: linear-gradient(135deg, #e3f2fd 0%, #f3e5f5 100%);
            border-radius: 12px;
            border: 2px solid var(--primary-color);
        }
        
        .download-section p {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-color);
            margin: 0;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes zoomIn {
            from { transform: scale(0.5); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        
        @media (max-width: 768px) {
            body {
                padding: 10px;
                align-items: flex-start;
                padding-top: 20px;
            }
            
            .container {
                margin: 0;
            }
            
            .header {
                padding: 20px;
            }
            
            .header h1 {
                font-size: clamp(16px, 5vw, 24px);
            }
            
            .content {
                padding: 20px;
            }
            
            .step {
                margin-bottom: 16px;
                padding: 16px;
            }
            
            .step::before {
                top: 16px;
                width: 24px;
                height: 24px;
                font-size: 12px;
                <?php echo $is_rtl ? 'right' : 'left'; ?>: -12px;
            }
            
            .step-content {
                margin-<?php echo $is_rtl ? 'right' : 'left'; ?>: 16px;
                font-size: 15px;
            }
            
            .language-selector select {
                font-size: 16px;
                padding: 12px 14px;
                padding-<?php echo $is_rtl ? 'left' : 'right'; ?>: 40px;
                max-width: 100%;
            }
            
            .store-link {
                padding: 20px;
            }
            
            .store-link a {
                font-size: 16px;
            }
            
            .modal img {
                max-width: 100%;
                max-height: 85%;
            }
            
            .close-btn {
                top: 16px;
                <?php echo $is_rtl ? 'left' : 'right'; ?>: 16px;
                font-size: 24px;
                width: 40px;
                height: 40px;
            }
            
            .zoom-icon {
                width: 48px;
                height: 48px;
            }
            
            .zoom-icon::before {
                font-size: 20px;
            }
        }
        
        @media (max-width: 480px) {
            .header {
                padding: 16px;
            }
            
            .content {
                padding: 16px;
            }
            
            .language-selector {
                margin-bottom: 24px;
            }
            
            .step {
                padding: 14px;
                margin-bottom: 14px;
            }
            
            .step-content {
                font-size: 14px;
                margin-<?php echo $is_rtl ? 'right' : 'left'; ?>: 14px;
            }
            
            .store-link {
                padding: 16px;
            }
        }
        
        @media print {
            body {
                background: white;
                padding: 0;
            }
            
            .container {
                box-shadow: none;
                max-width: none;
            }
            
            .modal, .zoom-icon {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?php echo $current_translation['heading']; ?></h1>
        </div>
        
        <div class="content">
            <div class="language-selector">
                <label for="language"><?php echo $current_translation['select_language']; ?></label>
                <select id="language" onchange="window.location.href='?lang='+this.value">
                    <option value="en" <?php echo $lang == 'en' ? 'selected' : ''; ?>>🇺🇸 English</option>
                    <option value="zh" <?php echo $lang == 'zh' ? 'selected' : ''; ?>>🇨🇳 中文 (Chinese)</option>
                    <option value="hi" <?php echo $lang == 'hi' ? 'selected' : ''; ?>>🇮🇳 हिन्दी (Hindi)</option>
                    <option value="es" <?php echo $lang == 'es' ? 'selected' : ''; ?>>🇪🇸 Español (Spanish)</option>
                    <option value="ar" <?php echo $lang == 'ar' ? 'selected' : ''; ?>>🇸🇦 العربية (Arabic)</option>
                    <option value="bn" <?php echo $lang == 'bn' ? 'selected' : ''; ?>>🇧🇩 বাংলা (Bengali)</option>
                    <option value="pt" <?php echo $lang == 'pt' ? 'selected' : ''; ?>>🇧🇷 Português (Portuguese)</option>
                    <option value="ru" <?php echo $lang == 'ru' ? 'selected' : ''; ?>>🇷🇺 Русский (Russian)</option>
                    <option value="ja" <?php echo $lang == 'ja' ? 'selected' : ''; ?>>🇯🇵 日本語 (Japanese)</option>
                    <option value="ko" <?php echo $lang == 'ko' ? 'selected' : ''; ?>>🇰🇷 한국어 (Korean)</option>
                    <option value="fr" <?php echo $lang == 'fr' ? 'selected' : ''; ?>>🇫🇷 Français (French)</option>
                    <option value="de" <?php echo $lang == 'de' ? 'selected' : ''; ?>>🇩🇪 Deutsch (German)</option>
                    <option value="it" <?php echo $lang == 'it' ? 'selected' : ''; ?>>🇮🇹 Italiano (Italian)</option>
                    <option value="id" <?php echo $lang == 'id' ? 'selected' : ''; ?>>🇮🇩 Bahasa Indonesia</option>
                    <option value="vi" <?php echo $lang == 'vi' ? 'selected' : ''; ?>>🇻🇳 Tiếng Việt (Vietnamese)</option>
                    <option value="th" <?php echo $lang == 'th' ? 'selected' : ''; ?>>🇹🇭 ไทย (Thai)</option>
                    <option value="tr" <?php echo $lang == 'tr' ? 'selected' : ''; ?>>🇹🇷 Türkçe (Turkish)</option>
                    <option value="nl" <?php echo $lang == 'nl' ? 'selected' : ''; ?>>🇳🇱 Nederlands (Dutch)</option>
                    <option value="ur" <?php echo $lang == 'ur' ? 'selected' : ''; ?>>🇵🇰 اردو (Urdu)</option>
                    <option value="ta" <?php echo $lang == 'ta' ? 'selected' : ''; ?>>🇮🇳 தமிழ் (Tamil)</option>
                    <option value="te" <?php echo $lang == 'te' ? 'selected' : ''; ?>>🇮🇳 తెలుగు (Telugu)</option>
                    <option value="gu" <?php echo $lang == 'gu' ? 'selected' : ''; ?>>🇮🇳 ગુજરાતી (Gujarati)</option>
                    <option value="mr" <?php echo $lang == 'mr' ? 'selected' : ''; ?>>🇮🇳 मराठी (Marathi)</option>
                    <option value="kn" <?php echo $lang == 'kn' ? 'selected' : ''; ?>>🇮🇳 ಕನ್ನಡ (Kannada)</option>
                    <option value="si" <?php echo $lang == 'si' ? 'selected' : ''; ?>>🇱🇰 සිංහල (Sinhala)</option>
                    <option value="ml" <?php echo $lang == 'ml' ? 'selected' : ''; ?>>🇮🇳 മലയാളം (Malayalam)</option>
                    <option value="pa" <?php echo $lang == 'pa' ? 'selected' : ''; ?>>🇮🇳 ਪੰਜਾਬੀ (Punjabi)</option>
                    <option value="fa" <?php echo $lang == 'fa' ? 'selected' : ''; ?>>🇮🇷 فارسی (Persian)</option>
                    <option value="ms" <?php echo $lang == 'ms' ? 'selected' : ''; ?>>🇲🇾 Bahasa Melayu (Malay)</option>
                    <option value="sv" <?php echo $lang == 'sv' ? 'selected' : ''; ?>>🇸🇪 Svenska (Swedish)</option>
                    <option value="no" <?php echo $lang == 'no' ? 'selected' : ''; ?>>🇳🇴 Norsk (Norwegian)</option>
                    <option value="pl" <?php echo $lang == 'pl' ? 'selected' : ''; ?>>🇵🇱 Polski (Polish)</option>
                    <option value="he" <?php echo $lang == 'he' ? 'selected' : ''; ?>>🇮🇱 עברית (Hebrew)</option>
                    <option value="el" <?php echo $lang == 'el' ? 'selected' : ''; ?>>🇬🇷 Ελληνικά (Greek)</option>
                    <option value="uk" <?php echo $lang == 'uk' ? 'selected' : ''; ?>>🇺🇦 Українська (Ukrainian)</option>
                </select>
            </div>
            
            <div class="steps">
                <div class="step">
                    <div class="step-content">
                        <a href="https://play.google.com/store" target="_blank"><?php echo $current_translation['step1']; ?></a>
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-content"><?php echo $current_translation['step2']; ?></div>
                </div>
                
                <div class="step">
                    <div class="step-content"><?php echo $current_translation['step3']; ?></div>
                </div>
                
                <div class="step">
                    <div class="step-content"><?php echo $current_translation['step4']; ?></div>
                </div>
                
                <div class="step">
                    <div class="step-content"><?php echo $current_translation['step5']; ?></div>
                </div>
                
                <div class="step">
                    <div class="step-content"><?php echo $current_translation['step6']; ?></div>
                </div>
                
                <div class="step">
                    <div class="step-content"><?php echo $current_translation['step7']; ?></div>
                </div>
            </div>
            
            <div class="store-link">
                <a href="https://play.google.com/store" target="_blank">
                    <img src="https://girlsnumbersforchat.likesyou.org/gp.png" alt="Google Play Store" class="store-img">
                    <?php echo $current_translation['store_link']; ?>
                </a>
            </div>
            
            <div class="highlight">
                <?php echo $current_translation['highlight']; ?>
            </div>
            
            <div class="app-img-container">
                <img src="https://girlsnumbersforchat.likesyou.org/hiapp.jpg" alt="App Installation Guide" class="app-img" onclick="openModal()">
                <div class="zoom-icon" onclick="openModal()"></div>
            </div>
            
            <div class="download-section">
                <p><?php echo $current_translation['download_text']; ?></p>
            </div>
        </div>
    </div>
    
    <div id="imageModal" class="modal" onclick="closeModal()">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <img src="https://girlsnumbersforchat.likesyou.org/hiapp.jpg" alt="App Installation Guide" onclick="event.stopPropagation()">
    </div>
    
    <script>
        function openModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }
        
        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('show');
            document.body.style.overflow = '';
        }
        
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        document.getElementById('language').addEventListener('change', function() {
            document.body.style.opacity = '0.7';
        });
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'slideInUp 0.6s ease forwards';
                }
            });
        }, {
            threshold: 0.1
        });
        
        document.querySelectorAll('.step').forEach(step => {
            observer.observe(step);
        });
        
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInUp {
                from {
                    transform: translateY(20px);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
            
            .step {
                opacity: 0;
                transform: translateY(20px);
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
