function wp_christmas_wish($atts) {
    // Christmas Wishes
     $json_data = '[
    {
      "wish": "Wishing you a Christmas that\'s merry and bright, filled with joy, love, and laughter. Happy Holidays!"
    },
    {
      "wish": "May your Christmas sparkle with moments of love, laughter, and goodwill. Have a joyful season!"
    },
    {
      "wish": "Sending warm wishes your way for a Christmas filled with happiness and love. Merry Christmas!"
    },
    {
      "wish": "May this Christmas bring endless joy and love to your heart and home. Merry Christmas!"
    },
    {
      "wish": "Wishing you peace, joy, and all the best this wonderful holiday has to offer. Merry Christmas!"
    },
    {
      "wish": "May your days be merry and bright and your heart be light this Christmas season. Happy Holidays!"
    },
    {
      "wish": "May the magic of Christmas fill every corner of your heart and home. Wishing you a joyful holiday season."
    },
    {
      "wish": "Sending you love, joy, and cheer on this wonderful Christmas day. May it last all year long!"
    },
    {
      "wish": "May the holiday season fill your home with happiness, your heart with love, and your life with laughter. Merry Christmas!"
    },
    {
      "wish": "Here\'s to a season filled with warmth, comfort, and good cheer. Wishing you a Merry Christmas!"
    },
    {
      "wish": "Warm wishes for a happy holiday season and a wonderful New Year. Merry Christmas to you and yours!"
    },
    {
      "wish": "Wishing you the kind of Christmas that warms your heart and fills your home with joy. Merry Christmas!"
    },
    {
      "wish": "May this season be as special as you are. Merry Christmas to you and your loved ones!"
    },
    {
      "wish": "May all the sweet magic of Christmas conspire to fill your heart with happiness. Merry Christmas!"
    },
    {
      "wish": "Sending you the blessings of peace, joy, and happiness this Christmas season. Have a wonderful Christmas!"
    },
    {
      "wish": "May your Christmas be blessed with peace, joy, and unconditional love. Wishing you a magical holiday!"
    },
    {
      "wish": "Wishing you a holiday season full of fun, happiness, and unforgettable memories. Merry Christmas!"
    },
    {
      "wish": "May this Christmas bring you endless happiness and the best memories to cherish forever. Happy Holidays!"
    },
    {
      "wish": "Let the spirit of Christmas bring you joy, peace, and all the happiness your heart can hold. Merry Christmas!"
    },
    {
      "wish": "May your Christmas be filled with moments of love, laughter, and goodwill. Wishing you a joyful season!"
    },
    {
      "wish": "Wishing you a Christmas season filled with joy and laughter and a New Year that brings peace and prosperity."
    },
    {
      "wish": "Here\'s to a Christmas that\'s merry and bright! May you find joy in every moment. Happy Holidays!"
    },
    {
      "wish": "Wishing you a Christmas full of love, peace, and unforgettable memories with family and friends."
    },
    {
      "wish": "May the magic of Christmas fill your home with joy, your heart with love, and your life with laughter."
    },
    {
      "wish": "Wishing you a Merry Christmas and a holiday season filled with love, joy, and cheer."
    },
    {
      "wish": "May the blessings of Christmas be with you today and always. Have a joyful and magical holiday!"
    },
    {
      "wish": "Sending you warm wishes this holiday season. May your Christmas be merry and your New Year be bright!"
    },
    {
      "wish": "May the warmth of Christmas fill your home and heart with happiness. Wishing you a magical holiday season!"
    },
    {
      "wish": "Wishing you a season of blessings, a year of prosperity, and a lifetime of happiness. Merry Christmas!"
    },
    {
      "wish": "May your Christmas be merry, your heart be light, and your year ahead be bright!"
    },
    {
      "wish": "Wishing you a festive holiday season filled with love, peace, and joy. Merry Christmas to you!"
    },
    {
      "wish": "Sending love and warm wishes for a bright and cheerful Christmas. May it be the happiest one yet!"
    },
    {
      "wish": "May your holidays sparkle with moments of love, laughter, and goodwill. Merry Christmas!"
    },
    {
      "wish": "Here\'s to love, laughter, and cheer this holiday season. Wishing you a magical Christmas!"
    },
    {
      "wish": "May the light of Christmas shine bright in your life and bring you peace and joy throughout the year."
    },
    {
      "wish": "Wishing you and your loved ones a very Merry Christmas and a joyful New Year!"
    },
    {
      "wish": "Sending my warmest thoughts and best wishes for a wonderful Christmas and a Happy New Year."
    },
    {
      "wish": "May the joy and peace of Christmas be with you all through the New Year. Merry Christmas and a Happy New Year!"
    },
    {
      "wish": "Wishing you a Christmas overflowing with love, laughter, and happiness. Enjoy every moment of this magical season!"
    },
    {
      "wish": "May your Christmas be filled with magic, love, and joy, and may your new year be equally bright and beautiful."
    },
    {
      "wish": "Wishing you a season of cheer, a year of blessings, and a lifetime of happiness. Merry Christmas and Happy New Year!"
    }
]';

    // Decode the JSON data into a PHP array
    $wishes = json_decode($json_data, true);

    // Display one random wish
    if (!empty($wishes)) {
        // Get a random key from the array
        $random_key = array_rand($wishes);
        
        // Display the random wish
        return "<div id='capture'>
                    <p class='christmas-content' style=\"max-width: 320px; color:white; background-image:url('https://i.ibb.co/f0DLRf0/153456.webp'); padding:10px 10px 100px 10px; font-weight:bold; text-align:center; background-size: 100% 100%; border: 1px solid #ddd; margin: 0 auto;\">
                        " . esc_html($wishes[$random_key]['wish']) . "
                    </p>
                </div>";
    }

    return '';
}

// Register the shortcode
add_shortcode('christmas_wish', 'wp_christmas_wish');
