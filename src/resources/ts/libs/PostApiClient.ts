import { Arguments } from "swr";
import axios from "axios";

type Arg = {
  arg: Arguments;
};
export const postData = async (url: string, { arg }: Arg) => {
  try {
    console.log(arg);
    const res = await axios.post(url, arg);
    console.log(res);
    return res.data;
  } catch(e) {
    console.log(e)
  } finally {
  }
};
