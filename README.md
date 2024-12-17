# Christmas Wishes WordPress Shortcode

**Christmas Wishes Shortcode** is a simple WordPress shortcode that displays random Christmas wishes on your website. You can integrate this shortcode into your theme’s `functions.php` or use it as a custom code snippet. It's perfect for adding a festive message during the Christmas season.

## Features

- Display random Christmas wishes.
- Beautifully styled with customizable background.
- Easy to use shortcode `[christmas_wish]`.

## How to Add the Shortcode

### Method 1: Adding to `functions.php`

1. Copy the code from `christmas-wishes.php`
2. Open your WordPress theme's `functions.php` file.
3. Add the copied code into `functions.php`.
4. Save the file.

### Method 2: Using a Code Snippet Plugin

1. Install a code snippet plugin like [Code Snippets](https://wordpress.org/plugins/code-snippets/).
2. Add a new snippet with the above code.
3. Save and activate the snippet.

## How to Use the Shortcode

Once you've added the shortcode code to your theme or snippet, you can use it in your WordPress posts, pages, or widgets:

1. Open the editor for the post or page where you want to display the wish.
2. Add the shortcode:

    ```
    [christmas_wish]
    ```

3. Publish or update the page.

The shortcode will now display a random Christmas wish each time the page is loaded.

## Customization

You can customize the appearance of the Christmas message by modifying the CSS styles within the shortcode function. For example, to change the background image or text color, update the inline styles inside the function:

```
<p class='christmas-content' style="color:white; background-image:url('https://i.ibb.co/QC1Wm3H/christmas-bg.jpg'); padding:20px; font-weight:bold; text-align:center; background-size:cover; border: 1px solid #ddd; margin: 0 auto;">
```

- **Background Image**: Replace the `url` value with your preferred Christmas-themed image.
- **Text Color**: Update the `color` value.
- **Padding, Font, Border**: Adjust these styles to match your design.

---

Enjoy spreading festive cheer with the **Christmas Wishes Shortcode**! 🎄
