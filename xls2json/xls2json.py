import pandas as pd
import json

papers = {}

papers_abstract = pd.read_excel('ACM RACS 2020 온라인 시스템용-v0.4.xlsx', index_col=0)
papers_authors = pd.read_excel('ACM RACS 2020 온라인 시스템용-v0.4.xlsx', sheet_name=1)

for idx, pa in papers_abstract.iterrows():
    paper_json = {"title": "null", "video_url": "", "abstracts": "null", "presenter": "", "presenter_email": "", "authors": [], "pdf_url": "#", "github_issue_id": 1}
    #print(idx, pa["title"])
    paper_json['title'] = pa['title']
    paper_json['abstracts'] = pa['Abstract']
    papers[idx] = paper_json

for idx, author in papers_authors.iterrows():
    paper_json = papers.get(author['논문ID'], None)
    if paper_json is None:
        print("Exception! Non-existing paper ID!")
        exit(1)
    author_str = f"{author['저자명']}, {author['소속']}, {author['나라']}"
    paper_json['authors'].append(author_str)
    fname = f"{author['논문ID']}.json"
    json.dump(paper_json, open(fname, 'w'), indent=4)
 

papers_video = pd.read_excel('RACS2020 online conference  (Responses).xlsx', index_col=0)

for idx, paper in papers_video.iterrows():       
    fname = f'{paper["Paper Number"]}.json'
    try:
        with open(fname) as f:
            paper_json = json.load(f)            
    except:
        paper_json = {"title": "null", "video_url": "", "abstracts": "null", "presenter": "", "presenter_email": "", "authors": ["author1", "author2"], "pdf_url": "#", "github_issue_id": 1}
    paper_json['title'] = paper['Paper Title']
    paper_json['video_url'] = paper['Video URL']
    paper_json['presenter'] = paper['Presenter Name']
    paper_json['presenter_email'] = paper['Email Address']
    paper_json['github_issue_id'] = paper['github']
    json.dump(paper_json, open(fname, 'w'), indent=4)

    