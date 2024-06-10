class MyArticle extends HTMLElement {
    static get observedAttributes() {
      return ['id', 'flag', 'title', 'product_url', 'image_url', 'large_image_url' , 'old_price', 'new_price', 'description'];
    }
  
    constructor() {
      super();

      this.id = '';
      this.flag = 'new';
      this.title = 'LOL';
      this.product_url='';
      this.image_url = '';
      this.large_image_url = '';
      this.old_price = 0;
      this.new_price = 0;
      this.description = '';
    }
  
    attributeChangedCallback(name, oldValue, newValue) {
      
      switch (name) {
        case 'id':
          console.log('id update',newValue)
          if (oldValue !== newValue) this.id = newValue
          break;
        case 'flag':
          console.log('flag update',newValue)
          if (oldValue !== newValue) this.flag = newValue
          break;
        case 'title':
          console.log('title update',newValue)
          if (oldValue !== newValue) this.title = newValue
          break;
        case 'product_url':
          console.log('product_url update',newValue)
          if (oldValue !== newValue) this.product_url = newValue
          break;
        case 'image_url':
          console.log('image_url update',newValue)
          if (oldValue !== newValue) this.image_url = newValue
          break;
        case 'large_image_url':
          console.log('largeImageurl update',newValue)
          if (oldValue !== newValue) this.large_image_url = newValue
          break;
        case 'old_price':
          console.log('old_price update',newValue)
          if (oldValue !== newValue) this.old_price = newValue
          break;
        case 'new_price':
          console.log('newprice update',newValue)
          if (oldValue !== newValue) this.new_price = newValue
          break;
        case 'description':
          console.log('description update',newValue)
          if (oldValue !== newValue) this.description = newValue
          break;
      }

    }
  
    renderContent() {
      const template = `
        <article 
          class="product-miniature js-product-miniature" 
          data-id-product="${this.id}" 
          data-id-product-attribute="5828" 
          itemscope="" 
          itemtype="http://schema.org/Product"
        >
            <div class="thumbnail-container">
                <div class="product-image">
                    <a href="${this.product_url}" class="thumbnail product-thumbnail">
                        <img 
                            class="img-fluid" 
                            src="${this.image_url}" 
                            alt="${this.title}" 
                            data-full-size-image-url="${this.large_image_url}"
                        >
                    </a>
                    <ul class="product-flags">
                        <li class="product-flag ${this.flag}">${this.flag}</li>
                    </ul>
                    <div class="functional-buttons clearfix"></div>
                </div>
                <div class="product-meta">
                    <h3 class="h3 product-title" itemprop="name">
                        <a href="#">${this.title}</a>
                    </h3>
                    <div class="product-price-and-shipping has_discount">
                        <span class="regular-price">${this.old_price}&nbsp;€</span>
                        <span class="discount-amount discount-product">-${this.new_price - this.old_price}&nbsp;€</span>
                        <span class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                          <span itemprop="priceCurrency" content="EUR"></span><span itemprop="price" content="${this.new_price}">${this.new_price}&nbsp;€</span>
                        </span>
                    </div>
                    <div class="leo-list-product-reviews">
                      <div class="leo-list-product-reviews-wraper">
                        <div class="star_content clearfix">
                          <div class="star"></div>
                          <div class="star"></div>
                          <div class="star"></div>
                          <div class="star"></div>
                          <div class="star"></div>
                        </div>
                      </div>
                    </div>
                    <div class="product-description-short" itemprop="description">
                      ${this.description}
                    </div>
                </div>
            </div>
        </article>
      `;
      this.innerHTML = template;
    }

    connectedCallback() {
      this.renderContent();
    }
  }

  customElements.define('my-article', MyArticle);

  