<template>
  <section>
    <v-dialog
      v-model="dialog"
      persistent
      max-width="600"
    >
      <v-card>
        <v-card-title class="text-center justify-center">広告主 新規登録</v-card-title>
        <v-divider/>
        <v-card-text class="py-0">
          <v-container fluid class="py-0">
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>名前</v-label>
              </v-col>
              <v-col cols="4" class="pb-0">
                <v-text-field
                  label="姓"
                  outlined dense
                  v-model="item.name_last"
                />
              </v-col>
              <v-col cols="4" class="pb-0">
                <v-text-field
                  label="名"
                  outlined dense
                  v-model="item.name_first"
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>フリガナ</v-label>
              </v-col>
              <v-col cols="4" class="pb-0">
                <v-text-field
                  outlined dense
                  label="姓"
                  v-model="item.name_furi_last"
                />
              </v-col>
              <v-col cols="4" class="pb-0">
                <v-text-field
                  label="名"
                  outlined dense
                  v-model="item.name_furi_first"
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>Mail Address</v-label>
              </v-col>
              <v-col cols="8" class="pb-0">
                <v-text-field
                  outlined dense
                  v-model="item.mail"
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>Password</v-label>
              </v-col>
              <v-col cols="8" class="pb-0">
                <v-text-field
                  outlined dense
                  v-model="item.password"
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>Password(再入力)</v-label>
              </v-col>
              <v-col cols="8" class="pb-0">
                <v-text-field
                  outlined dense
                  v-model="item.password_confirm"
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>ランク</v-label>
              </v-col>
              <v-col cols="8" class="pb-0">
                <v-text-field
                  outlined dense
                  v-model="item.rank"
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>企業名</v-label>
              </v-col>
              <v-col cols="8" class="pb-0">
                <v-text-field
                  outlined dense
                  v-model="item.company"
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>企業名(フリガナ)</v-label>
              </v-col>
              <v-col cols="8" class="pb-0">
                <v-text-field
                  outlined dense
                  v-model="item.company_furi"
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>郵便番号</v-label>
              </v-col>
              <v-col cols="8" class="pb-0">
                <v-text-field
                  outlined dense
                  v-model="item.zip"
                  hint="000-0000"
                  persistent-hint
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row>
              <v-col cols="4" class="pb-0">
                <v-label>住所</v-label>
              </v-col>
              <v-col cols="8" class="pb-0">
                <v-textarea
                  outlined
                  v-model="item.address"
                />
              </v-col>
            </v-row>
            <v-divider/>
            <v-row class="pb-0">
              <v-col cols="4" class="pb-0">
                <v-label>電話番号</v-label>
              </v-col>
              <v-col cols="8" class="pb-0">
                <v-text-field
                  outlined dense
                  v-model="item.phone"
                  hint="000-0000-0000"
                  persistent-hint
                />
              </v-col>
            </v-row>
          </v-container>
        </v-card-text>
        <v-divider/>
        <v-card-actions class="d-flex justify-center">
          <v-btn color="alert" dark @click="$emit('onNewDlgClose')">キャンセル</v-btn>
          <v-btn color="#5367FD" dark @click="save(1)">下書き</v-btn>
          <v-btn color="#C694F9" dark @click="save(2)">登録する</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </section>
</template>

<script>
  export default {
    props: {
      dialog: false,
    },
    data() {
      return {
        item: {
          name_last: '',
          name_first: '',
          name_furi_last: '',
          name_furi_first: '',
          mail: '',
          password: '',
          password_confirm: '',
          rank: '',
          company: '',
          company_furi: '',
          zip: '',
          address: '',
          phone: ''
        }
      }
    },
    methods: {
      save(flag) {
        this.$emit('onCreated', this.item, flag)
      }
    }
  }
</script>

<style scoped>
</style>