# DBMS Overview
- **Impressive Resume Points**
  - Led \[Project Name] initiative, resulting in a \[metric]% reduction in product update cycle time and a \[metric]% decrease in data entry errors.
  - Spearheaded requirements analysis, gathering input from various stakeholders across production and marketing teams to define project scope and success criteria.
  - Streamlined data communication by implementing a centralized \[system name] database, eliminating manual handoffs and enabling real-time collaboration between departments.
  - Oversaw \[system name] implementation, ensuring seamless integration with WordPress and Elementor for automated product updates on the company website.
- **New Workflow**
  - Production team makes adjustments to product + price info and edits the Airtable bases directly
  - The marketing team will approve of the changes and then trigger the API calls to directly update the corresponding pages on the AVT site
  - Any changes that need to be made can be reverted within the 2-week timeframe
 
---



## ~~ReD~~
- [Proposal Document](https://docs.google.com/presentation/d/1YWCBuZBBXLy2H1MHFpzuVV7Zx-hF5jjJ/edit#slide=id.p2)


## TDD (12/2 - 12/31)
- ~~[**POC stage**](https://github.com/jerrytigerxu/AVT-VC-DBMS/tree/main/DBMS/POC) (12/2-10) - Create a simple POC test with Airtable and establish connection with production team~~
- ~~[**Alpha stage**](https://github.com/jerrytigerxu/AVT-VC-DBMS/tree/main/DBMS/Alpha) (12/9-13) - Full implementation of the DBMS system on the experimental branch (communication and tech stack) + gathering of feedback and consideration of enhancements~~
  - The marketing team will be the hub of the product/price information (Airtable) and the production team should only highlight the changes of CRUD
- [**Beta stage**](https://github.com/jerrytigerxu/AVT-VC-DBMS/tree/main/DBMS/Beta) (12/16-1/3) - Full implementation of the DBMS system on the production site


## Streamlining (PAC) (1/6 - 1/10)
- Create a training materials document to maximize the ease of transition into the new workflow (update the price list update procedure based on how Airtable works - https://docs.google.com/document/d/1GnsRCRwW9YfqyiwXnfDC-bqT414wsFJHUhj-LAKaWUo/edit?tab=t.0#heading=h.vb65bwinjcr0)
  - One important point for documentation -> make sure the table names have no spaces! (Ex: "Aspheric Lenses" should be "asphericLenses")
