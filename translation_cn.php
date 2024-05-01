function translate_cn($string) {
    static $strings = array(
      'site_name' => '库诺',
      'page_title' => '库诺 – 用门罗币捐款',
      'page_title_error' => '错误| 库诺 – 用门罗币筹集资金',
      'page_title_search' => '搜索 | 库诺 – 用门罗币筹集资金',
      'page_title_fediverse' => 'Fediverse | 库诺 – 用门罗币筹集资金',
      'page_title_reset_password' => '重置密码 | 库诺 – 用门罗币筹集资金',
      'page_title_edit_fundraiser' => '编辑筹款活动 | 库诺 – 用门罗币筹集资金',
      'page_title_new_fundraiser' => '新的筹款 | 库诺 – 用门罗币筹集资金',
      'pagination' => '第 {NUM} 页/ {NUM_PAGES}页',
      'pagination_fundraisers' => '浏览 {START}-{END} of {TOTAL} 库诺',
      'pagination_donations' => '浏览 {START}-{END} of {TOTAL} 库诺',
      'pagination_submit' => '进入',
      'nav_manage_fundraiser' => '管理库诺',
      'nav_search' => '搜索库诺...',
      'nav_fundraiser_progress' => '更新库诺:',
      'nav_edit_fundraiser' => ' 编辑库诺:',
      'nav_logout' => '注销',
      'footer_description' => '用门罗币筹集资金',
      'footer_contact' => '联系: 支持 [at] anne.media',
      'footer_language' => '语言:',
      'footer_light_mode' => '白天模式',
      'footer_dark_mode' => '夜晚模式',
      'footer_manage_fundraiser' => '管理你的库诺:',
      'footer_new_fundraiser' => '开始一个新的库诺',
      'footer_edit_fundraiser' => '编辑库诺',
      'footer_reset_password' => '重置密码',
      'footer_quick_links' => '快速链接:',
      'footer_search_fundraisers' => '搜索库诺',
      'footer_search_fediverse' => '搜索 Fediverse',
      'footer_marketplace' => '市场',
      'footer_rss_feed' => 'RSS Feed',
      'footer_faq' => '常见问题解答',
      'email_new_donation_subject' => '[Kuno] New {DONATION} XMR donation to #{GUID}',
      'email_new_donation_body' => '你的库诺收到了一笔新的捐款!
          <br><br>Kuno: {TITLE}
          <br>Donation: {DONATION} XMR
          <br>Date: {DATE}
          <br><br>Total donations: {TOTAL} XMR
          <br>Total supporters: {SUPPORTERS}
          <br>Visit your kuno: https://kuno.anne.media/{TYPE}/{GUID}/
          <br><br>Deactivate email notifications here:
          <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
      'email_reset_password_subject' => '[Kuno] 重置密码',
      'email_reset_password_body' => '请访问此链接重置密码: {URL} 或者输入这个代码: {CODE} (24小时有效)',
      'homepage_title' => '简单的筹款 <br> 对每个人',
      'homepage_subtitle' => '用门罗币筹集资金或为慈善事业捐款',
      'homepage_point1' => '免费创建一个库诺',
      'homepage_point2' => '收到门罗币  (您可以兑换成现金)',
      'homepage_point3' => '零费用, 在全球运行 , 不需要银行账户',
      'homepage_button_start_fundraiser' => '开始一个库诺',
      'homepage_button_browse_fundraisers' => '浏览库诺',
      'homepage_bar' => 'GoFundMe和Kickstarter的公平替代品',
      'homepage_heading_browse_fundraisers' => '浏览 {AMOUNT} 库诺',
      'homepage_heading_total_raised' => '募集超过了 {AMOUNT} 个XMR !',
      'homepage_top_categories' => '热门分类',
      'homepage_recent_donations' => '最近捐款',
      'homepage_all_categories' => '全部分类 ',
      'homepage_launch_in_one_click' => '一键启动您的库诺',
      'homepage_get_started_free' => '免费开始',
      'homepage_info_heading1' => '门罗币是互联网的现金',
      'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                  门罗币是一种快速安全的在线汇款和收款方式.
  </p>
                  <p class="monero-info-p kuno">
                 无需银行账户、申请或政府身份证。只需为您的手机或电脑下载一个钱包，即可一键在全球范围内汇款和收款 .
  </p>
                  <p class="monero-info-p kuno">
                  门罗币的简单性和可访问性使其成为在线商店、远程工作、汇款、小费、筹款活动等的理想支付方式.
  </p>',
      'homepage_link_download_mobile' => '下载手机版',
      'homepage_link_download_desktop' => '下载桌面版',
      'homepage_info_heading2' => '未经审查的捐款',
      'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                  有了门罗币，你的钱就属于你了.
  </p>
                  <p class="monero-info-p kuno">
                  门罗币是点对点软件，不依赖第三方或公司。交易不能被审查，资金不能被冻结，用户不能被去平台化.
  </p>
                  <p class="monero-info-p kuno">
                  无论您是用门罗币筹集资金还是捐赠给公益事业，您都可以放心，接受者会收到 100% 的捐款.
  </p>',
      'homepage_link_official_website' => '官方网站',
      'homepage_link_overview' => '概述',
      'homepage_link_buy_monero' => '购买门罗币',
      'homepage_info_heading3' => '随处消费',
      'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                  将门罗币兑换成现金、在线购物或支付账单.
  </p>
                  <p class="monero-info-p kuno">
                  使用 <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> 或 <a href="https://coinatmradar.com">Crypto ATM</a> (无需银行账户)将门罗币兑换成实物现金很容易.
  </p>
                  <p class="monero-info-p kuno">
                  Marketplaces like <a href="https://moneromarket.io">MoneroMarket</a> and directories like <a href="https://monerica.com">Monerica</a> and <a href="https://acceptedhere.io">AcceptedHere</a> help you to buy what you need with Monero.
  </p>
                  <p class="monero-info-p kuno">
                  In addition, <a href="https://cakepay.com">CakePay</a> and <a href="https://coincards.com">CoinCards</a> offer prepaid Visa cards and gift cards to thousands of businesses. Personal shoppers like <a href="https://proxysto.re">ProxyStore</a>, <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> and <a href="https://shopinbit.com">ShopInBit</a> offer a convenient way to pay invoices with Monero.
  </p>
                  <p class="monero-info-p kuno">
                  Monero’s flexibility makes it easy to raise funds to pay bills, kickstart your project or support a charity.
  </p>',
      'homepage_link_exchange_to_cash' => 'Exchange to cash',
      'homepage_link_shop_online' => 'Shop online',
      'homepage_link_marketplace' => 'Marketplace',
      'homepage_use_case_heading1' => 'For charities',
      'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                    A local cat shelter needs donations for cat food and vet bills.
  </p>
                  <p class="use-case-p kuno">
                    They setup a kuno, share the link in social media and receive donations.
  </p>
                  <p class="use-case-p kuno">
                    The shelter uses the fundraised Monero to buy Petsmart gift cards with CakePay and withdraws cash to pay the vet bill with a Crypto ATM.
  </p>
                  <p class="use-case-p kuno">
                    Each donor receives an update with photos of the cats.
  </p>',
      'homepage_use_case_heading2' => 'For individuals',
      'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                    Alice needs to raise money for medical bills.
  </p>
                  <p class="use-case-p kuno">
                    Her daughter helps her to setup a kuno and shares it with their community.
  </p>
                  <p class="use-case-p kuno">
                    They collect enough money and exchange it to cash with LocalMonero.
  </p>
                  <p class="use-case-p kuno">
                    Alice writes a heartfelt thank you letter for each donor as a token of appreciation.
  </p>',
      'homepage_use_case_heading3' => 'For startups',
      'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                    An indie dev wants to create a new game.
  </p>
                  <p class="use-case-p kuno">
                    He sets up a kuno and shares it with gaming communities.
  </p>
                  <p class="use-case-p kuno">
                    He reaches the goal and uses the funds to hire Monero-friendly artists from MoneroMarket and buy game assets with a CakePay virtual debit card.
  </p>
                  <p class="use-case-p kuno">
                    Each donor gets a free copy of the game.
  </p>',
      'homepage_use_case_heading4' => 'For content creators',
      'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                    A band uploads their covers and original music to Youtube.
  </p>
                  <p class="use-case-p kuno">
                    They setup a Kuno Donation Page to receive Monero donations.
  </p>
                  <p class="use-case-p kuno">
                    Fans can also suggest songs or comment during livestreams by making a donation.
  </p>
                  <p class="use-case-p kuno">
                    This offers a better way to sustainably monetize their content, compared to ads.
  </p>',
      'homepage_use_case_heading5' => 'For you',
      'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                    With Kuno, everyone can raise money for their project, cause or startup.
  </p>
                  <p class="use-case-p kuno">
                    All you need is a Monero wallet and a goal.
  </p>',
      'fundraiser_heading_goal' => 'Goal',
      'fundraiser_heading_raised' => 'Raised',
      'fundraiser_heading_percentage_funded' => 'funded',
      'fundraiser_heading_donations' => 'Donations',
      'fundraiser_heading_supporters' => 'Supporters',
      'fundraiser_heading_comments' => 'Comments',
      'fundraiser_heading_support' => 'Support',
      'fundraiser_heading_share' => 'Share',
      'fundraiser_heading_promote' => 'Boost',
      'fundraiser_heading_about' => 'About',
      'fundraiser_heading_photos' => 'Photos',
      'fundraiser_heading_contact' => 'Contact',
      'fundraiser_heading_date' => 'Published:',
      'fundraiser_heading_supporters' => 'Supporters',
      'fundraiser_heading_new_comment' => 'Write a comment',
      'fundraiser_heading_new_fundraiser' => 'New kuno',
      'fundraiser_heading_edit_fundraiser' => 'Edit kuno',
      'fundraiser_heading_logout' => 'Logout',
      'fundraiser_support_text' => 'Send any amount of Monero to:',
      'fundraiser_share_text' => 'Copy the link to share this kuno with friends or social media:',
      'fundraiser_promote_text' => 'Boost your own kuno or help to boost this kuno.',
      'fundraiser_open_in_wallet' => 'Open in wallet',
      'fundraiser_info_point1' => 'You donate directly to the recipient’s wallet',
      'fundraiser_info_point2' => 'No middlemen or fees',
      'fundraiser_info_point3' => 'Donations are synced every 5 minutes',
      'fundraiser_full_size_photo' => 'Full-size photo',
      'fundraiser_no_donations' => 'No donations yet',
      'fundraiser_supporters' => '{AMOUNT} supporters',
      'fundraiser_button_support' => 'Support',
      'fundraiser_donate_with_monero' => 'Donate with Monero:',
      'fundraiser_comment_form_placeholder_txid' => 'TXID',
      'fundraiser_comment_form_placeholder_tx_key' => 'TX Key (Example: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
      'fundraiser_comment_form_placeholder_email' => 'Email (optional, for fundraiser rewards)',
      'fundraiser_comment_form_placeholder_comment' => 'Write a public comment',
      'fundraiser_comment_form_submit' => 'Comment',
      'search' => 'Search',
      'search_heading' => 'Search Kuno',
      'search_text' => 'Find kuno...',
      'search_sort_by_new' => 'Sort by new',
      'search_sort_by_recently_donated' => 'Sort by recently donated',
      'search_sort_by_percentage_funded' => 'Sort by percentage funded',
      'search_sort_by_goal' => 'Sort by goal',
      'search_all_categories' => 'All categories',
      'search_no_fundraisers_found' => 'No kuno found',
      'search_fediverse_heading' => 'Search Fediverse',
      'search_fediverse_text' => 'Search Fediverse kuno...',
      'search_fediverse_no_fundraisers_found' => 'No Fediverse kuno found',
      'search_fediverse_peers_list' => 'List of federated instances:',
      'login_invite_code_heading' => 'New kuno',
      'login_invite_code_text' => 'Enter an invite code to start a new kuno.',
      'login_invite_code_note' => 'If you don’t have an invite code, please contact support.',
      'login_invite_code_form' => 'Invite code',
      'login_invite_code_form_placeholder' => 'Invite code',
      'login_invite_code_submit' => 'Continue',
      'login_fundraiser_form_fundraiser' => 'Fundraiser',
      'login_fundraiser_heading' => 'Edit Fundraiser',
      'login_fundraiser_text' => 'Enter the kuno code and password to edit your kuno.',
      'login_fundraiser_note' => 'The code is in the URL:',
      'login_fundraiser_forgot_password' => 'Forgot password?',
      'login_fundraiser_form_fundraiser' => 'Kuno',
      'login_fundraiser_form_fundraiser_placeholder' => 'Kuno code (e.g. ae21)',
      'login_fundraiser_form_password' => 'Password',
      'login_fundraiser_form_password_placeholder' => 'Password',
      'login_fundraiser_form_submit' => 'Edit kuno',
      'edit_fundraiser_heading_fundraiser_details' => 'Kuno details',
      'edit_fundraiser_fundraiser_details_text' => 'Describe your kuno and add photos.',
      'edit_fundraiser_form_optional' => '(Optional)',
      'edit_fundraiser_form_more_info' => '(More info)',
      'edit_fundraiser_form_title' => 'Title',
      'edit_fundraiser_form_title_placeholder' => 'Kuno title',
      'edit_fundraiser_form_photo' => 'Photo',
      'edit_fundraiser_form_additional_photos' => 'Additional photos',
      'edit_fundraiser_form_description' => 'Description',
      'edit_fundraiser_form_description_placeholder' => 'Describe your kuno. Include rewards, milestones or additional contact details.',
      'edit_fundraiser_form_tags' => 'Tags',
      'edit_fundraiser_form_tags_placeholder' => 'Categories/tags',
      'edit_fundraiser_form_contact' => 'Main Contact',
      'edit_fundraiser_form_contact_placeholder' => 'Link your X (Twitter) account',
      'edit_fundraiser_form_altcontact' => 'Non-X contact',
      //  'edit_fundraiser_form_contact_placeholder' => 'Email, website, Twitter, Matrix, etc.',
      'edit_fundraiser_form_visibility' => 'Set kuno to private (not displayed in search results, donors will need the direct link)',
      'edit_fundraiser_heading_goal' => 'Goal',
      'edit_fundraiser_goal_text' => 'Set your goal and Monero address.',
      'edit_fundraiser_get_wallet' => 'No Monero wallet? Get one here.',
      'edit_fundraiser_form_goal' => 'Goal',
      'edit_fundraiser_form_goal_placeholder' => 'Goal (XMR)',
      'edit_fundraiser_form_donation_page' => 'No goal – I want to make a Donation Page',
      'edit_fundraiser_form_monero_address' => 'Monero address',
      'edit_fundraiser_form_monero_address_placeholder' => 'Example: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
      'edit_fundraiser_form_view_key' => 'Secret view key',
      'edit_fundraiser_form_view_key_placeholder' => 'Example: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
      'edit_fundraiser_heading_password' => 'Password',
      'edit_fundraiser_password_text' => 'Set a password to edit your kuno later.',
      'edit_fundraiser_widthdrawal_warning' => "Please avoid withdrawing partial balances during ongoing kuno. Monero uses larger balances for payments, leaving the remaining amounts as new transactions. This would be falsely calculated as a donation, and your kuno progress will be inaccurate. If you need to use funds on the go, always withdraw your full balance, leaving no 'change'.",
      'edit_fundraiser_terms' => "By starting a kuno, you agree to our <a onclick='ann.makeTerms()'>Terms</a>",
      'edit_fundraiser_form_email' => 'Email',
      'edit_fundraiser_form_email_placeholder' => 'Email (optional, for password resets)',
      'edit_fundraiser_form_password' => 'Password',
      'edit_fundraiser_form_new_password_placeholder' => 'Password',
      'edit_fundraiser_form_edit_password_placeholder' => 'Password (leave blank if no change)',
      'edit_fundraiser_form_email_notifications' => 'Email me when my kuno receives a new donation',
      'edit_fundraiser_form_submit_edit' => 'Update kuno',
      'edit_fundraiser_form_submit_new' => 'Start kuno',
      'edit_fundraiser_heading_supporters' => 'Kuno Supporters',
      'edit_fundraiser_supporters_text' => 'If a supporter has entered their email address, you will see it here (e.g. for fundraiser rewards).',
      'edit_fundraiser_no_supporters' => 'No email submissions yet',
      'edit_fundraiser_supporters_email' => 'Email',
      'edit_fundraiser_supporters_comment' => 'Comment',
      'edit_fundraiser_supporters_amount' => 'Amount',
      'edit_fundraiser_supporters_txid' => 'TXID',
      'edit_fundraiser_supporters_tx_key' => 'TX Key',
      'edit_fundraiser_supporters_date' => 'Date',
      'edit_fundraiser_heading_manage_fundraiser' => 'Manage kuno',
      'edit_fundraiser_fix_view_key' => 'Please add a valid view key in order to reactivate your kuno.',
      'edit_fundraiser_deactivate_fundraiser' => 'Deactivate kuno',
      'edit_fundraiser_reactivate_fundraiser' => 'Reactivate kuno',
      'edit_fundraiser_delete_fundraiser' => 'Delete Your Data',
      'reset_password_heading' => 'Reset Password',
      'reset_password_description' => 'Enter the kuno code and your email address to reset your password.',
      'reset_password_note' => '(If you didn’t add an email address, please contact support.)',
      'reset_password_form_fundraiser' => 'Kuno',
      'reset_password_form_fundraiser_placeholder' => 'Kuno code (e.g. ae21)',
      'reset_password_form_email' => 'Email',
      'reset_password_form_email_placeholder' => 'Email',
      'reset_password_form_confirmation_code' => 'Confirmation code',
      'reset_password_form_confirmation_code_placeholder' => 'Confirmation code',
      'reset_password_form_new_password' => 'New password',
      'reset_password_form_new_password_placeholder' => 'New password',
      'reset_password_form_submit' => 'Reset Password',
      'success' => 'Success',
      'success_form_submitted' => 'Form successfully submitted',
      'success_new_fundraiser' => 'Your kuno is active: <a href="https://kuno.anne.media/fundraiser/{GUID}/">View your fundraiser here</a><br>Bookmark this link to edit your fundraiser: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Edit fundraiser #{GUID}</a>',
      'success_new_donation_page' => 'Your donation page is active: <a href="https://kuno.anne.media/donate/{GUID}/">View your donation page here</a><br>Bookmark this link to edit your donation page: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Edit donation page #{GUID}</a>',
      'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">Your fundraiser has been updated.</a>',
      'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Click here to edit your fundraiser</a>',
      'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">Your donation page has been updated.</a>',
      'success_fundraiser_deactivated' => 'Kuno deactivated',
      'success_fundraiser_reactivated' => 'Kuno reactivated',
      'success_fundraiser_deleted' => 'Kuno data deleted',
      'success_valid_invite_code' => 'Valid invite code. You can now start a kuno.',
      'success_valid_confirmation_code' => 'Valid confirmation code',
      'success_check_email_for_password_reset_code' => 'Check your email address for a password reset code',
      'success_password_reset' => 'Password changed, you can now <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">edit your kuno</a>',
      'success_comment_sent' => 'Comment sent!',
      'success_image_uploaded' => 'Image uploaded',
      'error' => 'Error',
      'error_please_refresh' => 'Please refresh and try again.',
      'error_form_expired' => 'Form expired, please refresh',
      'error_form_ratelimited' => 'Ratelimited, please wait {RATELIMIT} seconds',
      'error_session_expired' => 'Session expired, please login again',
      'error_page_not_found' => 'Page not found',
      'error_fundraiser_not_found' => 'Kuno not found',
      'error_email_not_found' => 'No email address is set, please contact support',
      'error_invalid_email' => 'Please enter a valid email address',
      'error_invalid_email_for_notifications' => 'Please enter a valid email address to enable notifications',
      'error_invalid_confirmation_code' => 'Confirmation code is invalid or expired',
      'error_invalid_monero_address' => 'Invalid Monero address (Please enter your primary address, which starts with 4)',
      'error_invalid_view_key' => 'Invalid view key (Please enter your private/secret view key)',
      'error_invalid_address' => 'Invalid Monero address (Please enter your primary address, which starts with 4)',
      'error_entered_public_view_key' => 'Invalid view key (Please enter your private/secret view key, not public view key)',
      'error_entered_public_spend_key' => 'Invalid view key (Please enter your private/secret view key, not public spend key)',
      'error_entered_private_spend_key' => 'Invalid view key (Please enter your private/secret view key, not private spend key)',
      'error_invalid_private_view_key' => 'Invalid view key (Please enter your private/secret view key)',
      'error_invalid_txid' => 'Invalid TXID',
      'error_invalid_tx_key' => 'Please enter a valid TX key (also known as TX proof)',
      'error_invalid_txid' => 'Please enter a valid invite code',
      'error_incorrect_email' => 'Incorrect email address',
      'error_incorrect_password' => 'Incorrect password',
      'error_monero_address_already_used' => 'There is already a fundraiser/donation page with this Monero address',
      'error_missing_fundraiser_code_or_email' => 'Please enter your kuno code and email address',
      'error_missing_password_reset_code_or_password' => 'Please enter your password reset code and new password',
      'error_missing_txid_or_tx_key' => 'Please enter both the TXID and TX key (also known as TX proof)',
      'error_missing_password' => 'Please enter your password',
      'error_missing_view_key' => 'Please enter a valid private view key',
      'error_title_too_long' => 'Title must be between 4-80 characters',
      'error_description_too_long' => 'Description must be between 500-8000 characters',   
      'error_photo_missing' => 'Please include a picture',
      'error_tags_too_long' => 'Tags must be shorter than 250 characters',
      'error_contact_details_too_long' => 'Contact details must be shorter than 50 characters',
      'error_contact_details_twitter' => 'Please include a link to your X (Twitter) profile',
      'error_contact_details_missing' => 'Please include your main contact',
      'error_goal_must_be_positive' => 'Your kuno goal must be a positive number',
      'error_image_incorrect_file_type' => 'Image must be a PNG or JPEG',
      'error_image_maximum_image_size' => 'Max image size 2 MB',
      'error_image_invalid' => 'Invalid image',
      'error_image_storage_full' => 'Storage full',
      'error_image_missing' => 'Please upload an image',
      'error_prevent_edit' => 'Editing has been disabled. Contact Kuno admin.',
      'translate_help' => 'It would be fantastic if Kuno was accessible in more languages. Help us with translations at <a href="https://github.com/annemedia/kuno-translation">https://github.com/annemedia/kuno-translation</a>',
      'wallets_header' => 'Monero: <span class="text3">Wallet Choices</span>',
      'monero_gui_wallet' => 'An open-source graphical user interface (GUI) wallet developed by the Monero community, completely free to use, suitable for both beginners and advanced users.',
      'cake_wallet' => 'Securely store, send and exchange your crypto with ease. Privately buy gift cards and pay at the counter with crypto, piece of cake.',
      'monerujo_wallet' => 'Android Wallet for Monero. With Monerujo, you can seamlessly move back and forth between several wallets. Making a new one is as simple as a few taps.',
      'feather_wallet' => 'Feather is a free, open-source Monero wallet for Linux, Tails, Windows and macOS. Easy-to-use, small, fast and beginner friendly.'
      
    );
    $translation = ($strings[$string]) ? $strings[$string] : $string;
    return $translation;
  }
