import pandas as pd
import json

papers = pd.read_excel('RACS2020 online conference  (Responses).xlsx', index_col=0)

for idx, paper in papers.iterrows():
    fname = f'{paper["Paper Number"]}.json'
    try:
        with open(fname) as f:
            paper_json = json.load(f)            
    except:
        paper_json = {"title": "null", "video_url": "", "abstracts": "null", "presenter": "", "presenter_email": "", "authors": ["author1", "author2"], "pdf_url": "#", "github_issue_id": 1}
    paper_json['video_url'] = paper['Video URL']
    paper_json['presenter'] = paper['Presenter Name']
    paper_json['presenter_email'] = paper['Email Address']    
    json.dump(paper_json, open(fname, 'w'), indent=4)

    