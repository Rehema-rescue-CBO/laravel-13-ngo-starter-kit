# Database Schema Guide
### Here is a Guide Of Database Tables And their Fields.

```bash

# 1. Users Table.

  Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

# 2 . Tags
//fields:
        - title
        - slug 

## Tag Relationships
                 event - hasMany
                 program - hasMany
                 
# 3 . Category
//fields:
        - title
        - slug 

## Category  Relationships
                 event   - hasMany
                 program - hasMany
                 blog    - hasMany


# 4. Events Table.
//Fields:
        - title.
        - time.
        - guests.
        - location.
        - content.
        - user_id.
        - slug.
        - image_url
        - tag_id
### Event Relationships:
                       user- hasmany
                       event - BelongsTo 

# 5. Programs/Projects Table 

//Fields:
        - program_title
        - tag_id
        - user_id
        - slug 
        - content
        - image_url
         
### Program Relationships:
                user - hasMany
                program - BelongsTo //tag & user
                tag    - HasMany   

# 6. Blog/Articles 

//Fields: 
        - title
        - slug 
        - user_id 
        - category_id
        - content 
        - image_url
        - 
## Blog Relationships:
                     user - BelongsTo
                     category - hasMany  //blogs


# 7. Gallery 
//Fields:
        - title
        - caption 
        - slug  
        - image 

# 8.  Slider 

  //Fields:
          - title
          - caption 
          - gallery_id
          - blog_id 
          - program_id
          - event_id














```

