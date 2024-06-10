class Article:
  def __init__(self):
    self.id = None
    self.flag = None
    self.title = None
    self.product_url = None
    self.image_url = None
    self.large_image_url = None
    self.old_price = None
    self.new_price = None
    self.description = None

  def to_dict(self):
      return {
          "id": self.id,
          "product_url": self.product_url,
          "image_url": self.image_url,
          "large_image_url": self.large_image_url,
          "title": self.title,
          "flag": self.flag,
          "new_price": self.new_price,
          "description": self.description
      }

  
  def __str__(self):
      return f"""
                  {self.id} -
                  {self.flag} -
                  {self.title} -
                  {self.product_url} - 
                  {self.image_url} -
                  {self.large_image_url} -
                  {self.old_price} -
                  {self.new_price} -
                  {self.description} -
                  {self.title} 
            """

def article_to_json(article):
    return article.to_dict()  # Assurez-vous que cette méthode retourne un dictionnaire

def scrapJoya():
  baseUrl ='https://www.joyalestore.com'

  articles = {};

  response = requests.get(baseUrl)
  if response.status_code == 200:
    soup = BeautifulSoup(response.text, 'html.parser')

    navbar_selector = 'nav.leo-megamenu.cavas_menu.navbar.navbar-default.disable-canvas'

    navbar = soup.find('div',class_='header-top').find('nav')
    links = navbar.find_all('a');

    nbr = len(links)

    #get all pages in links
    for i in range(nbr):
      #categorie name
      categorie = links[i].find('span').text
      articles[categorie]=[]
      print('============================')
      print(categorie)
      # print(links[i])
      # print(links[i].get('href'))

      page = requests.get(links[i].get('href'))
      soup2 = BeautifulSoup(page.text, 'html.parser')
      articles_p = soup2.find_all('article')

      nbr2 = len(articles_p)
      # nbr2=1

      #get All Articles in categorie
      for j in range(nbr2):
        a = Article()

        a.id              = articles_p[j].get('data-id-product')

        tmp  = articles_p[j].find('div',class_='product-image').find('a')
        a.product_url     = tmp.get('href')

        tmp2 = tmp.find('img')
        if(tmp2):
          a.image_url       = tmp2.get('src')
          a.large_image_url = tmp2.get('data-full-size-image-url')
 
        # print(articles_p[j])
        tmp3  = articles_p[j].select_one("h3[itemprop='name']")
        # print(tmp3)
        a.title           = tmp3.text

        tmp4  = articles_p[j].select_one('li',class_="product_flag")
        print('flag')
        print(tmp4)
        if(tmp4):
          a.flag            = tmp4.text

        tmp5  = articles_p[j].select_one("span[itemprop='price']")
        print('price')
        print(tmp5)
        if(tmp5):
          a.new_price       = tmp5.text
        
        tmp6  = articles_p[j].select_one("div[itemprop='description']")
        print('description')
        print(tmp6)
        if(tmp6):
          a.description       = tmp6.text
      
        articles[categorie].append(a)
  json_string = json.dumps(articles, ensure_ascii=False,default=article_to_json)

  print(json_string)

  with open('articles.json', 'w', encoding='utf-8') as file:
      file.write(json_string)


  