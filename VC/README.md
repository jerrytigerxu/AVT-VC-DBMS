# VC

## Overview


- [Proposal Document](https://docs.google.com/presentation/d/1VBq04JXDPAGHs2TQ4BMvtFasOWDat4eD/edit#slide=id.p2)

- [WBS - AVT Version Control Implementation (WP Staging Pro)](https://docs.google.com/document/d/1aGZpPTFO3D_grJ1oe2mDQRMdRzp63e8vkJDijbE7TMY/edit)

- [AVT Version Control Procedure Guide](https://docs.google.com/document/d/1S4QSLErt_L4nE8XTKEmNhX0P-yvQIhcPWlx3jSVwTHE/edit?pli=1)

- Impressive resume point: Led the analysis, research, and implementation of a robust version control system, streamlining web development/production workflows to be twice as efficient and reducing website update errors by over 30%. This initiative enabled faster development of content and website features, while fostering seamless collaboration and knowledge transfer across the team through the creation of comprehensive procedure training materials.


- Finalized workflow:
  - For content changes, just take advantage of drafts and revision history to work directly on the production site
  - For code/infrastructure changes, work on the experimental branch and test pushing changes (just the code files) to the development branch before pushing to the production site
  - Regular routine of fully updating the development branch to match the production site (for backup purposes)



---


## Documentation
Figure out how to only push specified files/databases to save time (then update training materials) ﻿Thu, Aug 8



Create training materials (videos and/or written guides) ﻿Tue, Aug 6 - Wed, Aug 7



Test CSS changes and PHP/JS changes ﻿Mon, Aug 5

Don't want to pay for the Code Snippets plugin (or WPCode) since we're not constantly changing the website layout or functionality, so we'll just make direct changes to the files

Figure out cloning of the staging branch site to create a development branch site ﻿Mon, Aug 5

https://wp-staging.com/docs/create-a-clone-of-a-staging-site/

You simply need to login to the WP dashboard IN the staging site to get the option in WP Staging Pro to clone the staging site

When you create the "development branch" site, you have to push changes to the that branch from within the staging site (it's like the Russian dolls but with staging sites) -> only those who are the main developers will have main access to this because it's not accessible from the production site



7/31/24 Figure out the issue with the staging site (prevents you from editing anything) (the issue might be discrepancy between PHP versions | might need to edit the wp-config.php to remove the annoying errors)

Solution:

define( 'WP_DEBUG', false ); ABOVE this line """/\ *That's all, stop editing! Happy blogging. */""" in wp-config.php

Use the plugin "File Manager" to directly edit files without needing FTP

https://www.wpbeginner.com/wp-tutorials/how-to-turn-off-php-errors-in-wordpress/





Fri, Jul 26﻿ Finally got the go-ahead to purchase and implement WP Staging Pro on the AVT site! | Encountered a few issues related to the plugin itself but nothing on the AVT site was affected | Will need to troubleshoot and debug and sort things out with the WP Staging Pro support team

Prepare a proposal document (to address the pros and cons of current setup and pros and cons of version control implementation) and bring up to Johnny and Joanna ﻿Wed, Jul 3

Outline of presentation

Title slide - "Project Proposal: Implementing Version Control for AVT Website"

The problem

The solution - version control

Benefits of version control

Addressing your concerns: experimentation

Addressing your concerns: backup capabilities

The end result: simplified workflow

Implementation plan (~2 months)

Budget (WP Staging Pro License)

Conclusion

Tue, Jun 11﻿ Did some initial planning out of the project task and time breakdown with the help of Gemini
