<footer>
    <div class="footer py-4 border-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 d-flex align-items-center">
                    <div class="footer-logo">
                        <a href="/"><img
                                src="https://www.researchproposalwriter.com/assets/images/research-proposal-writer.webp"
                                alt="Research Proposal Writer" loading="lazy"></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-5 col-md-7 d-flex flex-wrap flex-sm-nowrap">
                    <div class="inner-footer d-md-flex justify-content-center align-items-center">
                        <div class="quick-links">
                            <h5 class="fw-bold">Quick Links</h5>
                            <div class="lists">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/#cities">Cities</a></li>
                                    <li><a href="/#reviews">Reviews</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="inner-footer d-flex justify-content-lg-center align-items-center">
                        <div class="contact">
                            <h5 class="fw-bold">Contact With Us</h5>
                            <div class="lists">
                                <ul>
                                    <li>16 Miami Dr, Point Cook VIC 3030, Australia</li>
                                    <li><a href="mailto:help@researchproposalwriter.com"><b>Mail</b>:
                                            help@researchproposalwriter.com</a></li>
                                    <li><a href="tel:<?php echo $callno; ?>"><b>Contact</b>: +<?php echo $callno; ?></a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=61489921023"><b>Whatsapp</b>: +<?php echo $callno; ?></a></li>
                                    <li>
                                        <a href="https://www.facebook.com/247Asignmenthelp"><img src="https://www.247assignmentcare.com/facebook.png" alt="Facebook Logo" Loading="lazy" style="width:10%;"></a>
                        <a href="https://www.instagram.com/clickinpedia.io"><img src="https://www.247assignmentcare.com/instagram.png" alt="Instagram Logo" Loading="lazy" style="width:10%;"></a>
                        <a href="https://www.linkedin.com/company/clickinpediaio"><img src="https://www.247assignmentcare.com/linkedin.png" alt="Linkedin Logo" Loading="lazy" style="width:10%;"></a>
                        <a href="https://www.youtube.com/@Clickinpedia._io"><img src="https://www.247assignmentcare.com/youtube.png" alt="Youtube Logo" Loading="lazy" style="width:10%;"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area py-3 border-top">
        <div class="container">
            <div class="copyright-column col-lg-12 col-md-12 col-sm-12 text-center p-2">
                <div class="copyright">Copyright © 2011 - <span id="year"></span> <a href="https://www.researchproposalwriter.com/"
                        target="_blank"><b>Researchproposalwriter.com</b></a>, All Right Reserved || A Brand of <a class="aw text-white p-1 rounded fw-bold"
                        href="https://www.assignmentwriter.au/">Assignment Writer</a> </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>
<script>
      document.addEventListener('DOMContentLoaded', function () {
  const iframeId = 'chat-widget-iframe'; // Unique ID for the iframe
  const referralUrl = encodeURIComponent(document.referrer);
  const currentPage = encodeURIComponent(window.location.href);
  const origin = encodeURIComponent(window.location.origin);
  let chatWidgetVisible = true;
  
  // Function to create the iframe if it doesn't already exist
  const createChatWidget = () => {
    const existingIframe = document.getElementById(iframeId);
    if (!existingIframe) {
      // Using the URL format from the React component
     const api = `https://portal.clickinpedia.io/new-chat?website=${origin}&currentPage=${currentPage}&redirect=${referralUrl}&theme=researchproposalwriter-com&countryCode=61&phoneNumber=489921023&whatsappNo=489921023&email=help@researchproposalwriter.com&chatAlignment=right`;
 
      const chatWidget = document.createElement('iframe');
      chatWidget.src = api;
      chatWidget.id = iframeId;
      chatWidget.style.position = 'fixed';
      
      chatWidget.style.bottom = '20px';
      chatWidget.style.width = '420px'; // Updated to match React dimensions
      chatWidget.style.height = '81%'; // Updated to match React dimensions
      chatWidget.style.right = '5px';
      chatWidget.style.border = 'none';
      chatWidget.style.zIndex = '9999999';
      chatWidget.style.background = 'transparent';
      chatWidget.style.pointerEvents = 'none'; // Hide until loaded
      chatWidget.style.opacity = '0'; // Hide until content is available
      
      document.body.appendChild(chatWidget);
      
      chatWidget.onload = () => {
        chatWidget.style.pointerEvents = 'auto'; // Enable interaction once loaded
        chatWidget.style.opacity = '1'; // Show iframe once content is available
      };
      
      chatWidget.onerror = () => {
        console.error('Failed to load the chat widget iframe.');
        chatWidget.style.display = 'none'; // Hide if it fails to load
      };
    }
  };
  
  createChatWidget();
  
  // Create toggle button (optional, based on your React component)
  const createToggleButton = () => {
    const toggleButton = document.createElement('button');
    toggleButton.style.position = 'fixed';
    toggleButton.style.bottom = '20px';
    toggleButton.style.right = '20px';
    toggleButton.style.padding = '10px 20px';
    toggleButton.style.fontSize = '16px';
    toggleButton.style.color = '#fff';
    toggleButton.style.border = 'none';
    toggleButton.style.borderRadius = '4px';
    toggleButton.style.cursor = 'pointer';
    toggleButton.textContent = 'Toggle Chat';
    
    toggleButton.addEventListener('click', () => {
      chatWidgetVisible = !chatWidgetVisible;
      const chatWidget = document.getElementById(iframeId);
      
      if (chatWidget) {
        if (chatWidgetVisible) {
          chatWidget.style.width = '420px';
          chatWidget.style.height = '81%';
          chatWidget.style.bottom = '20px';
          chatWidget.style.borderRadius = '0px';
        } else {
          chatWidget.style.width = '240px';
          chatWidget.style.height = '233px';
          chatWidget.style.bottom = '10px';
          chatWidget.style.borderRadius = '34px';
        }
      }
    });
    
    document.body.appendChild(toggleButton);
  };
  
  // Uncomment the next line if you want to include the toggle button
  // createToggleButton();
  
  const handleMessage = (event) => {
    // Updated to use the correct origin from the React component
    if (event.origin === 'https://portal.clickinpedia.io') {
      const chatWidget = document.getElementById(iframeId);
      if (chatWidget) {
        if (event.data.action === 'hideChat') {
          chatWidgetVisible = false;
          chatWidget.style.width = '330px'; // Updated to match React dimensions
          chatWidget.style.height = '233px'; // Updated to match React dimensions
          chatWidget.style.bottom = '10px';
          chatWidget.style.borderRadius = '34px';
        } else if (event.data.action === 'showChat') {
          chatWidgetVisible = true;
          chatWidget.style.width = '420px'; // Updated to match React dimensions
          chatWidget.style.height = '81%'; // Updated to match React dimensions
          chatWidget.style.bottom = '20px';
          chatWidget.style.borderRadius = '0px';
        }
      }
    } else {
      console.warn('Message origin not recognized:', event.origin); // Debugging line for unknown origins
    }
  };
  
  window.addEventListener('message', handleMessage);
  
  // Clean up on unload
  window.addEventListener('beforeunload', () => {
    window.removeEventListener('message', handleMessage);
  });
});
    </script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-076QDYEGGQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-076QDYEGGQ');
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- <script src="assets/js/swiper.js"></script> -->
<script src="assets/js/main.js"></script>