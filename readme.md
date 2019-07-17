# Webp Image Workflow
- Check if `$conf['webpStatus']` in _settings.php_ is set to `true`
- Then check if client's Browser support **WEBP** Images (`$browser->is_webp_supported()`)
- Check Browser
    - Then check if Browser is Either **Chrome** OR **Firefox** and on **_Desktop_**.
        - Show Images compressed to **50%**
    - Then check if Browser is Either **Chrome** OR **Firefox** and on **_Mobile_**.
        - Show Images compressed to **25%**

# How to call webp Image on a page
First get webp Image
> `$webp_image_uri = getWebpImage($image_uri);`

Update `img` element  
- Set webp image on `data-src`
    - `data-src="<?php echo file_create_url( $webp_image_uri); >?"`

# Webp not found Error
If the webp image not found `setDefaultImageOnDataSrc()` js function will be called and will replace the `data-src` from `data-img`  

Add `data-img` and `onerror` attributes on `img` element
> `data-img="<?php echo file_create_url($default_image_uri); ?>"`  
`onerror="setDefaultImageOnDataSrc(this)"`

where `data-img` attribute have default jpg/jpeg image uri

# Webp working Setup
- `BrowserCheck.php` in _'sites/all/libraries/browser/BrowserCheck.php'_
- In _sites/all/modules/custom/vaidam_search/vaidam_search.module_
    - require `BrowserCheck.php`
    - `getWebpImage()` function created here
- In _sites/all/themes/vaidam/v0/dist/js/vaidam.js_
    - `setDefaultImageOnDataSrc(this)` function
