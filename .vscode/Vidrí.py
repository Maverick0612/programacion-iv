#Practica
from facebook_scraper import get_posts
import csv

face = csv.writer(open('Vidrí.csv','w'))
face.writerow(['POST_ID','TEXTO','LIKES'])

for post in get_posts('almacenesvidri', pages=10, ):
    #print(post.keys())
    print(post['post_id'], post['text'], post['likes'], sep=' - ')
    try:
        face.writerow([post['post_id'], post['text'], post['likes']])
    except:
        None