<?php
// Database connection details
$servername = "104.152.222.128";
$username = "lionnimesha_pattauser";
$password = "Dk?&EZC]aNK*";
$dbname = "lionnimesha_push";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . " (Error Code: " . $conn->connect_errno . ")");
}

// Pagination setup
$items_per_page = 15;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $items_per_page;

// Fetch total number of records
$total_sql = "SELECT COUNT(*) as total FROM FABusers";
$total_result = $conn->query($total_sql);
$total_rows = $total_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $items_per_page);

// Fetch data for current page
$sql = "SELECT name, age, phone FROM FABusers LIMIT $items_per_page OFFSET $offset";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Girls Mobile Numbers</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Google Translate Script -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'af,am,ar,az,be,bg,bn,bs,ca,ceb,co,cs,cy,da,de,el,en,eo,es,et,eu,fa,fi,fr,fy,ga,gd,gl,gu,ha,haw,he,hi,hmn,hr,ht,hu,hy,id,ig,is,it,iw,ja,jv,ka,kk,km,kn,ko,ku,ky,la,lb,lo,lt,lv,mg,mi,mk,ml,mn,mr,ms,mt,my,ne,nl,no,ny,pa,pl,ps,pt,ro,ru,sd,si,sk,sl,sm,sn,so,sq,sr,st,su,sv,sw,ta,te,tg,th,tl,tr,uk,ur,uz,vi,xh,yi,yo,zh-CN,zh-TW,zu',
                layout: google.translate.TranslateElement.InlineLayout.VERTICAL,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #ff6f61, #de3c9c);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 120px; /* Space for top banner */
        }
        h2 {
            text-align: center;
            color: #fff;
            margin-top: 0;
            z-index: 1000;
            position: relative;
            font-weight: 600;
            font-size: 2.5rem;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            padding: 20px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h3 {
            margin: 0 0 10px;
            color: #333;
            font-weight: 600;
        }
        .card p {
            margin: 5px 0;
            color: #666;
        }
        .copy-btn {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            transition: background 0.3s;
        }
        .copy-btn:hover {
            background: #218838;
        }
        .share-message {
            color: #d9534f;
            font-size: 14px;
            margin-top: 10px;
        }
        .pagination {
            text-align: center;
            margin: 20px 0;
            padding-bottom: 100px; /* Space for bottom banner */
        }
        .pagination a {
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 5px;
            background: #007bff;
            color: white;
            border-radius: 5px;
            display: inline-block;
            font-family: 'Poppins', sans-serif;
        }
        .pagination a:hover {
            background: #0056b3;
        }
        .pagination a.disabled {
            background: #ccc;
            cursor: not-allowed;
        }
        @media screen and (max-width: 600px) {
            .container {
                padding-top: 100px; /* Adjusted for mobile */
            }
            h2 {
                font-size: 24px;
                margin-bottom: 20px;
            }
            .pagination a {
                padding: 8px 12px;
                font-size: 14px;
            }
            #google_translate_element {
                max-width: 150px; /* Smaller width for mobile */
            }
            #google_translate_element select {
                font-size: 12px;
                padding: 6px;
            }
        }
        .ad-banner, .ad-bottom-banner {
            position: fixed;
            width: 100%;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 999;
        }
        .ad-banner {
            top: 0;
            left: 0;
        }
        .ad-bottom-banner {
            bottom: 0;
            left: 0;
        }
        .ad-native {
            margin-top: 10px;
            position: relative;
        }
        .ad-iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        .ad-banner .ad-iframe, .ad-bottom-banner .ad-iframe {
            height: 90px;
        }
        .ad-native .ad-iframe {
            height: 100px;
        }
        .ad-close {
            position: absolute;
            top: 5px;
            right: 5px;
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            width: 80px;
            height: 30px;
            cursor: pointer;
            font-size: 14px;
            line-height: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .ad-native .ad-close {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none; /* Hidden initially for Native Ad */
        }
        .ad-close:hover {
            transform: scale(1.1);
            box-shadow: 0 0 8px rgba(255,255,255,0.8);
        }
        .ad-banner .ad-close, .ad-bottom-banner .ad-close {
            transform: none; /* Reset transform for banner ads */
        }
        .ad-close:hover:not(.ad-native .ad-close) {
            transform: scale(1.1);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Top Banner Ad -->
    <div class="ad-banner" id="ad-banner">
        <iframe class="ad-iframe" src="https://www.revenuecpmgate.com/wh2n9648?key=59d2d99eb3db84f0218a660f96846809"></iframe>
        <button class="ad-close" onclick="closeAd('ad-banner')">Close Ad</button>
    </div>

    <div class="container">
        <!-- Language Selector -->
        <div id="google_translate_element"></div>

        <h2>Girls Mobile Numbers</h2>

        <div class="content-container" id="content-container">
            <?php if ($result->num_rows > 0): ?>
                <div class="card-grid">
                    <?php while ($row = $result->fetch_assoc()): 
                        // Mask last 5 digits of phone number
                        $phone = $row['phone'];
                        $masked_phone = substr($phone, 0, -5) . '*****';
                    ?>
                        <div class="card">
                            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                            <p>Age: <?php echo htmlspecialchars($row['age']); ?></p>
                            <p>Phone Number: <span class="phone-number"><?php echo htmlspecialchars($masked_phone); ?></span></p>
                            <button class="copy-btn" onclick="handleCopy('<?php echo htmlspecialchars($phone); ?>', this)">Copy Number</button>
                            <p class="share-message" id="share-message-<?php echo htmlspecialchars($phone); ?>"></p>
                            <!-- Native Advanced Ad -->
                            <div class="ad-native" id="ad-native-<?php echo htmlspecialchars($phone); ?>">
                                <iframe class="ad-iframe" src="https://www.revenuecpmgate.com/wh2n9648?key=59d2d99eb3db84f0218a660f96846809"></iframe>
                                <button class="ad-close" onclick="closeAd('ad-native-<?php echo htmlspecialchars($phone); ?>')">Close Ad</button>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p style="text-align:center;">No data found.</p>
            <?php endif; ?>

            <!-- Pagination -->
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $page - 1; ?>">Back</a>
                <?php else: ?>
                    <a class="disabled">Back</a>
                <?php endif; ?>
                
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="?page=<?php echo $i; ?>" <?php echo $i == $page ? 'style="background: #0056b3;"' : ''; ?>><?php echo $i; ?></a>
                <?php endfor; ?>
                
                <?php if ($page < $total_pages): ?>
                    <a href="?page=<?php echo $page + 1; ?>">Next</a>
                <?php else: ?>
                    <a class="disabled">Next</a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Bottom Banner Ad -->
        <div class="ad-bottom-banner" id="ad-bottom-banner">
            <iframe class="ad-iframe" src="https://www.revenuecpmgate.com/wh2n9648?key=59d2d99eb3db84f0218a660f96846809"></iframe>
            <button class="ad-close" onclick="closeAd('ad-bottom-banner')">Close Ad</button>
        </div>
    </div>

    <script>
        // Store share counts and timers
        const shareCounts = new Map();
        const timers = new Map();

        // Show close button for Native Advanced Ads after 7 seconds
        document.addEventListener('DOMContentLoaded', () => {
            const nativeAds = document.querySelectorAll('.ad-native');
            nativeAds.forEach(ad => {
                const closeButton = ad.querySelector('.ad-close');
                setTimeout(() => {
                    closeButton.style.display = 'block';
                }, 7000);
            });
        });

        function handleCopy(phone, button) {
            const shareMessage = "Download this amazing app now! Girls Mobile Numbers For Chat. New numbers added daily! Don’t miss out, get it now: https://rebrand.ly/740c7e";
            const shareMessageElement = document.getElementById(`share-message-${phone}`);
            
            // Check share count
            let count = shareCounts.get(phone) || 0;
            if (count < 5) {
                // Prompt WhatsApp share
                const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(shareMessage)}`;
                window.open(whatsappUrl, '_blank');
                
                // Increment share count
                count++;
                shareCounts.set(phone, count);
                
                if (count < 5) {
                    shareMessageElement.textContent = `Please share ${5 - count} more time(s) to unlock the full number!`;
                    return;
                }
            }

            // Unlock number for 5 minutes
            navigator.clipboard.writeText(phone).then(() => {
                shareMessageElement.textContent = 'Number copied to clipboard!';
                button.textContent = 'Number Copied!';
                button.disabled = true;

                // Set timer to lock number again after 5 minutes
                const timerId = setTimeout(() => {
                    button.textContent = 'Copy Number';
                    button.disabled = false;
                    shareCounts.set(phone, 0); // Reset share count
                    shareMessageElement.textContent = '';
                    timers.delete(phone);
                }, 5 * 60 * 1000); // 5 minutes
                timers.set(phone, timerId);
            });
        }

        function closeAd(adId) {
            document.getElementById(adId).style.display = 'none';
        }
    </script>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>